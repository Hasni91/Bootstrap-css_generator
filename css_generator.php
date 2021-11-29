<?php

function my_merge_image($first_img_path, $second_img_path){
    $size_Img1 = getimagesize($first_img_path);
    $size_Img2 = getimagesize($second_img_path);

    $newImg = imagecreate($width,$height);
    
    $width = $size_Img1[0] + $size_Img2[0];
    $height = $size_Img1[1] + $size_Img2[1];

    $first_img_path = imagecreatefrompng($first_img_path);
    $second_img_path = imagecreatefrompng($second_img_path);

    imagecopy($newImg, $first_img_path, 0, 0, 0, 0, $size_Img1[0], $size_Img1[1]);
    imagecopy($newImg, $second_img_path, $size_Img1[0], $size_Img1[1], 0, 0, $size_Img2[0], $size_Img2[1]);
    imagepng($newImg, "fusion.png");
}

my_merge_image("/Users/hasni/delivery/Bootstrap-css_generator/img1.png","/Users/hasni/delivery/Bootstrap-css_generator/img2.png");