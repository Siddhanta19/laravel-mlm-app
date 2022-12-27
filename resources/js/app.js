import "./bootstrap";

import ClipboardJS from "clipboard";
import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

const clipboard = new ClipboardJS(".link");

clipboard.on("success", function (e) {
    document.getElementById("copy-message").innerHTML = "Copied!";
    setTimeout(function () {
        document.getElementById("copy-message").innerHTML = "";
    }, 3000);
});

clipboard.on("error", function (e) {
    console.log(e);
});
