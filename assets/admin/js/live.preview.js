function waitForEditorWrapper() {
    const observer = new MutationObserver((mutations, observerInstance) => {
        const editor = document.querySelector('.wp-block-post-content');
        if (editor) {
            observerInstance.disconnect(); // Stop observing once the element is found
            setupLivePreview(editor);
        }
    });

    // Observe changes to the body or editor container
    observer.observe(document.body, { childList: true, subtree: true });
}

function setupLivePreview(editor) {
    let lastFeaturedImageId = null;

    // Subscribe to changes in the editor
    wp.data.subscribe(() => {
        const featuredImageId = wp.data.select('core/editor').getEditedPostAttribute('featured_media');

        if (featuredImageId !== lastFeaturedImageId) {
            lastFeaturedImageId = featuredImageId;

            if (featuredImageId) {
                wp.apiFetch({ path: `/wp/v2/media/${featuredImageId}` }).then((media) => {
                    editor.style.backgroundImage = `url(${media.source_url})`;
                    editor.style.backgroundSize = 'cover';
                    editor.style.backgroundPosition = 'center';
                });
            } else {
                editor.style.backgroundImage = '';
            }
        }
    });
}

// Start observing for the editor wrapper
document.addEventListener('DOMContentLoaded', waitForEditorWrapper);