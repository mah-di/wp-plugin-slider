jQuery(document).ready(function(){
    const options = {
        items: 2,
            // Type: Number
            // Default: 3
            // The number of items you want to see on the screen.
        margin: 10,
            // Type: Number
            // Default: 0
            // margin-right(px) on item.
        loop: true,
            // Type: Boolean
            // Default: false
            // Infinity loop. Duplicate last and first items to get loop illusion.
        center: true,
            // Type: Boolean
            // Default: false
            // Center item. Works well with even an odd number of items.
        mouseDrag: true,
            // Type: Boolean
            // Default: true
            // Mouse drag enabled.
        touchDrag: true,
            // Type: Boolean
            // Default: true
            // Touch drag enabled.
        pullDrag: true,
            // Type: Boolean
            // Default: true
            // Stage pull to edge.
        freeDrag: false,
            // Type: Boolean
            // Default: false
            // Item pull to edge.
        stagePadding: 0,
            // Type: Number
            // Default: 0
            // Padding left and right on stage (can see neighbours).
        merge: true,
            // Type: Boolean
            // Default: false
            // Merge items. Looking for data-merge='{number}' inside item..
        mergeFit: false,
            // Type: Boolean
            // Default: true
            // Fit merged items if screen is smaller than items value.
        autoWidth: 0,
            // Type: Boolean
            // Default: false
            // Set non grid content. Try using width style on divs.
        startPosition: 5,
            // Type: Number/String
            // Default: 0
            // Start position or URL Hash string like '#id'.
        URLhashListener: false,
            // Type: Boolean
            // Default: false
            // Listen to url hash changes. data-hash on items is required.
        nav: true,
            // Type: Boolean
            // Default: false
            // Show next/prev buttons.
        rewind: true,
            // Type: Boolean
            // Default: true
            // Go backwards when the boundary has reached.
        // navText: ['&#x27;next&#x27;', '&#x27;prev&#x27;'],
            // Type: Array
            // Default: [&#x27;next&#x27;,&#x27;prev&#x27;]
            // HTML allowed.
        navElement: 'div',
            // Type: String
            // Default: div
            // DOM element type for a single directional navigation link.
        slideBy: 1,
            // Type: Number/String
            // Default: 1
            // Navigation slide by x. 'page' string can be set to slide by page.
        slideTransition: 'linear',
            // Type: String
            // Default: ``
            // You can define the transition for the stage you want to use eg. linear.
        dots: true,
            // Type: Boolean
            // Default: true
            // Show dots navigation.
        dotsEach: true,
            // Type: Number/Boolean
            // Default: false
            // Show dots each x item.
        dotsData: false,
            // Type: Boolean
            // Default: false
            // Used by data-dot content.
        lazyLoad: false,
            // Type: Boolean
            // Default: false
            // Lazy load images. data-src and data-src-retina for highres. Also load images into background inline style if element is not <img>
        lazyLoadEager: 0,
            // Type: Number
            // Default: 0
            // Eagerly pre-loads images to the right (and left when loop is enabled) based on how many items you want to preload.
        autoplay: false,
            // Type: Boolean
            // Default: false
            // Autoplay.
        autoplayTimeout: 1500,
            // Type: Number
            // Default: 5000
            // Autoplay interval timeout.
        autoplayHoverPause: true,
            // Type: Boolean
            // Default: false
            // Pause on mouse hover.
        smartSpeed: 250,
            // Type: Number
            // Default: 250
            // Speed Calculate. More info to come..
        // fluidSpeed: true,
            // Type: Boolean
            // Default: Number
            // Speed Calculate. More info to come..
        autoplaySpeed: false,
            // Type: Number/Boolean
            // Default: false
            // autoplay speed.
        navSpeed: false,
            // Type: Number/Boolean
            // Default: false
            // Navigation speed.
        dotsSpeed: false,
            // Type: Boolean
            // Default: Number/Boolean
            // Pagination speed.
        dragEndSpeed: false, 
            // Type: Number/Boolean
            // Default: false
            // Drag end speed.
        callbacks: true,
            // Type: Boolean
            // Default: true
            // Enable callback events.
        responsive: {},
            // Type: Object
            // Default: empty object
            // Object containing responsive options. Can be set to false to remove responsive capabilities.
        responsiveRefreshRate: 200,
            // Type: Number
            // Default: 200
            // Responsive refresh rate.
        responsiveBaseElement: Window,
            // Type: DOM element
            // Default: window
            // Set on any DOM element. If you care about non responsive browser (like ie8) then use it on main wrapper. This will prevent from crazy resizing.
        video: false,
            // Type: Boolean 
            // Default: false
            // Enable fetching YouTube/Vimeo/Vzaar videos.
        videoHeight: false,
            // Type: Number/Boolean
            // Default: false
            // Set height for videos.
        videoWidth: false,
            // Type: Number/Boolean
            // Default: false
            // Set width for videos.
        animateOut: false,
            // Type: String/Boolean
            // Default: false
            // Class for CSS3 animation out.
        animateIn: false,
            // Type: String/Boolean
            // Default: false
            // Class for CSS3 animation in.
        fallbackEasing: 'swing',
            // Type: String
            // Default: swing
            // Easing for CSS2 $.animate.
        info: false,
            // Type: Function
            // Default: false
            // Callback to retrieve basic information (current item/pages/widths). Info function second parameter is Owl DOM object reference.
        nestedItemSelector: false,
            // Type: String/Class
            // Default: false
            // Use it if owl items are deep nested inside some generated content. E.g 'youritem'. Dont use dot before class name.
        itemElement: 'div',
            // Type: String
            // Default: div
            // DOM element type for owl-item.
        stageElement: 'div',
            // Type: String
            // Default: div
            // DOM element type for owl-stage.
        navContainer: false,
            // Type: String/Class/ID/Boolean
            // Default: false
            // Set your own container for nav.
        dotsContainer: false,
            // Type: String/Class/ID/Boolean
            // Default: false
            // Set your own container for nav.
        checkVisible: true,
            // Type: Boolean
            // Default: true
            // If you know the carousel will always be visible you can set `checkVisibility` to `false` to prevent the expensive browser layout forced reflow the $element.is(':visible') does.
    }

    jQuery('.owl-carousel').owlCarousel( options );
});