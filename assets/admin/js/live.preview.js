jQuery(document).ready(function ($) {
    function waitForEditorWrapper() {
        const observer = new MutationObserver((mutations, observerInstance) => {
            const $editor = $('.wp-block-post-content');console.log($editor[0])
            if ($editor.length) {
                setupLivePreview($editor);
            }
        });

        observer.observe(document.body, { childList: true, subtree: true });
    }

    function setupLivePreview($editor) {
        let lastFeaturedImageId = null;

        wp.data.subscribe(() => {
            const featuredImageId = wp.data.select('core/editor').getEditedPostAttribute('featured_media');

            if (featuredImageId !== lastFeaturedImageId) {
                lastFeaturedImageId = featuredImageId;

                if (featuredImageId) {
                    wp.apiFetch({ path: `/wp/v2/media/${featuredImageId}` }).then((media) => {
                        const imageUrl = media.source_url;
                        const imageWidth = media.media_details.width;
                        const imageHeight = media.media_details.height;

                        if (imageWidth && imageHeight) {
                            const aspectRatio = imageHeight / imageWidth;
                            const editorWidth = $editor.width();

                            // Calculate min-height based on aspect ratio
                            const minHeight = editorWidth * aspectRatio;
                            $editor.css('min-height', `${minHeight}px`);
                        }

                        $editor.css({
                            'background-image': `url(${imageUrl})`,
                            'background-size': 'cover',
                            'background-position': 'center'
                        });
                    });
                } else {
                    $editor.css({
                        'background-image': '',
                        'min-height': ''
                    });
                }
            }
        });
    }

    waitForEditorWrapper();
});