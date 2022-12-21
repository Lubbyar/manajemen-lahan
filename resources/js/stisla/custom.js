/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

document.addEventListener('show-message', function (event){
    let type = event.detail.type;
    let message = event.detail.message;

    Swal.fire({
        icon: type,
        text: message
    });
});
