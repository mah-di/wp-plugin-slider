wp.domReady(() => {
    // Set the default alignment for blocks that support alignment
    wp.blocks.getBlockTypes().forEach((block) => {
        if (block.supports && block.supports.align) {
            block.supports.align.default = 'wide';
        }
    });

    // Intercept block insertion and apply default alignment
    const { subscribe, select, dispatch } = wp.data;

    subscribe(() => {
        const { getBlockSelectionStart, getBlocks } = select('core/block-editor');
        const { updateBlockAttributes } = dispatch('core/block-editor');

        // Get all blocks in the editor
        const blocks = getBlocks();

        // Identify the most recently selected block
        const selectedBlockId = getBlockSelectionStart();
        const selectedBlock = blocks.find((block) => block.clientId === selectedBlockId);

        if (selectedBlock && selectedBlock.attributes.align === undefined) {
            // Check if the block supports alignment
            const blockType = wp.blocks.getBlockType(selectedBlock.name);
            if (blockType.supports && blockType.supports.align) {
                // Apply the default alignment (wide)
                updateBlockAttributes(selectedBlockId, { align: 'wide' });
            }
        }
    });
});