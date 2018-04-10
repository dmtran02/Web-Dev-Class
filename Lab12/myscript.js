            function setCookieValue(name,value,days) {
                alert ("Adding (to cookie): "+name+" = "+value+"\n\n"+"will last "+days+" days");
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime()+(days*24*60*60*1000));
                    var expires = "; expires="+date.toGMTString();
                }
                else var expires = "";
                document.cookie = name+"="+value+expires+"; path=/";
            }

            function getCookieValue(name) {
                var nameEQ = name + "=";
                var ca = document.cookie.split(';');
                for(var i=0;i < ca.length;i++) {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                }
                return null;
            }

            function eraseCookieValue(name) {
                setCookieValue(name,"",-1);
            }

            function showCookieValue(name) {
                var val = getCookieValue(name);
                if (val == null) {
                    alert ("There is no cookie value named '"+name+"'");
                }
                else {
                   alert (name + " = " + val);
                }
            }
            
            function showWholeCookie() {
                    alert ("whole cookie is "+document.cookie);
            }
            
            $(document).ready(function(){
                $("#calc").click(function(){
                    var total = $("#month").val()*$("#pay").val();
                    $("#total").val(total);
                })
                $("#submit").click(function(){
                    alert("Thank you for your donation!");
                })
                
                $("#btnoriginal").click(function(){
                    $('link[href]').attr('href','index.css');
                })
                $("#btnblue").click(function(){
                    $('link[href]').attr('href','indexBlue.css');
                })
                $("#btngreen").click(function(){
                    $('link[href]').attr('href','indexGreen.css');
                })
            })