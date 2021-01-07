<?php 

class Html {

    public function meta($content) {
        return ('<meta ' . $content . '>');
    }
    public function stylesheet($path) {
        return('<link rel="stylesheet" href="' . $path . '">');
    }
    public function image($path) {
        return('<img src="' . $path . '" alt="">');
    }
    public function link($path) {
        return('<a href="' . $path . '">');
    }
    public function script($path) {
        return('<script src="' . $path . '"></script>');
    }

} 

?>