<?php declare(strict_types=1);
header("Link: <https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css>; rel=preload; as=style; crossorigin", false);
header("Link: <https://fonts.googleapis.com/css?family=Lato:400,700|Roboto>; rel=preload; as=style; crossorigin", false);
header("Link: </css/main.css>; as=style; rel=preload", false);
header("Link: </css/light.css>; as=style; rel=preload", false);
header("Link: </css/dark.css>; as=style; rel=preload", false);

header("Link: <https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js>; as=script; rel=preload; crossorigin", false);
header("Link: </js/darkMode.js>; as=script; rel=preload", false);
header("Link: </js/main.js>; as=script; rel=preload", false);

header("Link: <https://b2.demosjarco.dev/file/demosjarco-portfolio/images/logo.svg>; rel=preload; as=image", false);
header("Link: <https://b2.demosjarco.dev/file/demosjarco-portfolio/images/close-up-code-coding-239898.png>; rel=preload; as=image", false);
?>