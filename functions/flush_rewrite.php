<?php
function my_rewrite_flush() {
    custom_trips();
    flush_rewrite_rules();
}