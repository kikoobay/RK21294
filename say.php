<?php
function decrypt2($key, $garble) { 
    list($encrypted_data, $iv) = explode('::', base64_decode($garble), 2); 
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv); 
}
$a = decrypt2("1234","MmhnNHF3NXBMUFR2Y1pjQzhRa0RXVVRSUWxhLzF3UFFzaGZweGFCcHI5Q1Z2Snowak5CR3dtNm5UMVRvRnM5UXlVelIwdTJYNGU5L09BOSsxWWJMd1VsYmp6OFNpaHowM2dwZnNhbzJrVktMbUsyWFBqb05OYlJJQkdzaVpicXlwdzlhcWVZMFQyRDA1S0orbjJ6UjNxZkpYWmxBT3ZpNVBMTHJ3bStkb2dwREJFSjBvY3pkaVlIcUhFeUhnRUVTQTkvMXZkSTArWG1PZ2ZKcU5HVDZFM3dOR3N2eGY0NGVlSHZJVUtnSTJZS0pBKzFNTWFSVTErQkordDdsdGYzWjZ3ZE1VWVRBaEZhUnJYN0kzUTRRTitJVU4vM2U4MjFwcHlacVNDd1hGT0NTZEY3d3FvakNidlR0dmdvbG8zM1JIVlBFNTRiV00zdmUxd3h2VlVTaEprNitjbW0xRFNZdWhscm8xeXkrLzVuSkg4L1dqNUpDODNIU1JSQjlOWitFTHIzWGNoQkxJb1AzTTZGekRsK1RiZHBteWVmMzBUNThnY3ByUy83U3pZRzJVYXhzQ3BLWnNnK3RIK3BUVGJnbUNaUVlMRU1YeGMrODU2dk50LzZFSjBxUGJWaUhGd3VtZDZBVllKUGdkZndpamx3MzRpKzY2RzlyL29HZUhBUFh1cWl3ekZWM1lIb0kwTjNHZUhsS2dGblpCNGo4VDFSLzVJTG1xMFpadGhETnNSS3l2aXdaZFMvU3AyeUZ5VCtHOjqxL01HpTcuoNNKYIHpgZgw");
echo $a;