<?php
/**
 * Created by PhpStorm.
 * User: magi
 * Date: 2016-08-23
 * 
 * 테스트
 */

exit;
include $_SERVER['DOCUMENT_ROOT'] . '/../config/common.php';
$br = "<br>";


$obj = new shorturl();
echo $obj->base62_encode(4294967295);
//4294967295: 4GFfc3
//18446744073709551615: lYGhA16ahq0

$post['url'] = 'https://www.google.co.kr/search?tbs=sbi:AMhZZiuQQqbPZpRlpaEAudCxfDwR2jrPBYbZxXkKLJquGm7uXzSSMQzsn3NmDs1Yy2SplMGgCgjZRE3GGmDoVuIZHEje3UA4CzvvJIAZBz_1B1gxzV5uziMHGXpuqgn7pZjvaUeIqvZe2qUhxlHq3JeQkIv2Tovt_1NPQyS7g5zrE6Z10bD4za8VoQlhSWsZHlBI5WtC3oGPWsBequHMILovwHevh_1o8uRj7hPTHCO2LcBRvM4YS0N-_19ixO-GAJ0mHK6-qA88h41z81nBPvBhkeIqTGIsrlXP2emKm2s8396hUt-DZIQYs44BIgRrQ94GkIeNvebJTWp2EVPa2BCzKsbIeFEv8gDUtcWAWU_1mrdKfWCTOAn8djZu35cYSIzM3fTwIGZ6f9PjqH61CUdVF81VL14srr6RuPk0bN208Kd5sps7XyMG9X9bxtVPr2kJtBVQw_125cyCGdAr-XirHQPHGzv0ABwpZUifCw6pAVNVo2hrel1ggoDZ5HR6Yjqm5GX_1ISHKR8kIhWfnXLpfgBX-fJF9vWNV3CawrEgvXYLVU0xlb6s35uvRODYgZFQNhsFoSXp8KCGIcNYSQaZvO1LexNXRJZVSCCUVtmRs-Zyx3NeS1AEkTwSAx-YvK2X7_17y1lca77qe8ylwBG82Ym99Afg-7w8_1Jn0rp9K7jndlLeTrrDxfBt8lmBz0qWlqTZ9MOMqQy3ifEat9STnIAWlDnoI2bmuLBKC9vifCE889l1woux2kfiFl4VH7KXjShGixQrCr4B-sAvg7U6fckRFsKetIPLD7Onbm_12jV3Re93G-FUwSACKMWMSp5e5a0jtCYMGxNCBpHdI4DvU2X5iLVo1pqVEKzr4iYF4-TuCeIKS_1yR8GjT-GRHL_1zB1EZmv_1GHVknivGvbSJIwIdOVbG0SrltSModd6tOWloAA0c97L9I1BP96_1L1bufVIAjx80LB38KtQR3GL9MNg5dRQV7IOCa77_1EyEjIaMtrZq5troNxguplkc1nqgGD0HRlQEKfJ8Od1IqGp7HxC3QoVWWPWenjyBXOTt3r5Dv2W01m2py6nSday395xikLXJZGvXxe7XdhK83JxJsa3m4Y4zIMYhLnryogJmzI8zOJaAYZMQPekRSjBgTCnz63xmIId22UcFG1fN20-4lGdrct7RcAYeViyiQui14uP2-2zo9pMCkLvA4iNxW-giqgI6uPFAiPY5BUnGH1qWRNibi0ctd9U_1llF3AQoMK94fj5jV0vwYhPLv4x_1WYbLv_1ZTNC65L8Iz1Ql6sblVF59njrHBpvXxqo6xC3qLtwTQPZxLgawLHUeVS7yrl6YcT0iqJWbjTBYK0OfErAEJ9phTFLq7c0RMHwxLlJ9h-Ydh8pgEXmqk6YzyDidY-E4DnNVcq4toowoqVjrgVwAe662i1mvL0bnVZ5AaEkbs0FoflesFAShEGmnX71GYtqFCpdfKbM5mmDptCB1SLHQOT6tWQX79kWAQkD1PlXV0qEkhc7O_1KYwRgeCY0wmYY-HCld7RzTjfAl4RHsWb3we1V9lAByXQsG-xuN2wDYaofciZzVPWxtXe1ifthTt9IcQmtUivgExWADSmxZFej0AD6bhmACKvh2ZnlFkWXB31fsvU_1m1lbiraskmylpEN7eymPg';
$returnurl = $obj->do_make($post['url']);

echo $br;
echo $returnurl;
echo $br;
echo $br;

$returnurl = $obj->do_go($returnurl);

echo $br;
echo $returnurl;
echo $br;
print_r2($obj->error());
