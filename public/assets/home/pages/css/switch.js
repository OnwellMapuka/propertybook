
var sum=0;
function home(){document.location="home_edit.php";}
var x=0;
var y=0;
var z=0;
var xz=0;
var yz=0;

function aboutus(n){
             x+=n;
                if(x==1){
                    document.getElementById('aboutus').style.display='block';
                    document.getElementById('news').style.display='none';
                    document.getElementById('services').style.display='none';
                    document.getElementById('sermons').style.display='none';
                    document.getElementById('testimony').style.display='none';
                        }
                if(x==2){
                    x=0;
                    document.getElementById('aboutus').style.display='none';
                        }
                                    }

function news(n){
             y+=n;
                if(y==1){
                    document.getElementById('news').style.display='block';
                    document.getElementById('aboutus').style.display='none';
                    document.getElementById('services').style.display='none';
                    document.getElementById('sermons').style.display='none';
                    document.getElementById('testimony').style.display='none';
                        }
                if(y==2){
                    y=0;
                    document.getElementById('news').style.display='none';
                        }
                                    }

function services(n){
             z+=n;
                if(z==1){
                    document.getElementById('services').style.display='block';
                    document.getElementById('news').style.display='none';
                    document.getElementById('aboutus').style.display='none';
                    document.getElementById('sermons').style.display='none';
                    document.getElementById('testimony').style.display='none';
                        }
                if(z==2){
                    z=0;
                    document.getElementById('services').style.display='none';
                        }
                                    }

function mysermons(n){
             xz+=n;
                if(xz==1){
                    document.getElementById('sermons').style.display='block';
                    document.getElementById('news').style.display='none';
                    document.getElementById('aboutus').style.display='none';
                    document.getElementById('services').style.display='none';
                    document.getElementById('testimony').style.display='none';
                        }
                if(xz==2){
                    xz=0;
                    document.getElementById('sermons').style.display='none';
                        }
                                    }

function mytestimony(n){
             yz+=n;
                if(yz==1){
                    document.getElementById('testimony').style.display='block';
                    document.getElementById('sermons').style.display='none';
                    document.getElementById('news').style.display='none';
                    document.getElementById('aboutus').style.display='none';
                    document.getElementById('services').style.display='none';
                        }
                if(yz==2){
                    yz=0;
                    document.getElementById('testimony').style.display='none';
                        }
                                    }
function services_manage(){document.location="services_edit.php";}
function services_image(){document.location="services_image_edit.php";}
function history(){document.location="history_edit.php";}
function values(){document.location="values_edit.php";}
function events(){document.location="events_edit.php";}
function news_add(){document.location="post-add.php";}
function news_manage(){document.location="post-manage.php";}
function post_trash(){document.location="post-trash.php";}
function leadership(){document.location="leadership_edit.php";}
function news_comments(){document.location="post-comments.php";}
function leadership(){document.location="leadership_edit.php";}
function gallery(){document.location="gallery_edit.php";}
function sermons(){document.location="sermons_edit.php";}
function sermons_comments(){document.location="sermons-comments.php";}
function testimony(){document.location="testimonies_edit.php";}
function testimony_comments(){document.location="testimonies-comments.php";}
function contactus(){document.location="contactus_edit.php";}
function dashboard(){document.location="index.php";}
