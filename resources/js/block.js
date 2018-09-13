(function (window, document) {

    let blocks = Array.prototype.slice.call(
        document.querySelectorAll('.block--video_block')
    );

    blocks.forEach(function (block) {

        let wrapper = block.querySelector('.video__wrapper');
        let cover = wrapper.querySelector('.video__cover');
        let iframe = wrapper.querySelector('iframe');

        if (cover == undefined) {
            return false;
        }

        wrapper.removeChild(iframe);

        cover.addEventListener('click', function () {

            wrapper.appendChild(iframe);

            iframe.onload = function () {
                wrapper.removeChild(cover);
            }
        });

    });
})(window, document);
