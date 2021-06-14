<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Your Website Title" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/itemdetail.css">
    <script src="js/jquery.js"></script>
    <script defer src="js/itemdetail.js"></script>
</head>

<script>
    $(document).ready(function(){
        $('.img').click(function(){
            let img_src=$(this).attr('src');
            $('.main').fadeOut(100,function(){
                $(this).attr('src',img_src);
            }).fadeIn(100);
        })
    })
</script>

<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0&appId=955730244775576&autoLogAppEvents=1" nonce="mQvVGZj6"></script>
  


<img src="images/menu.png" id="menu" alt="">
    <!--  header part   -->
    <div class="header">
        <img src="images/img1.jpg" id="logo" alt="logo">
        <ul>
            <li> <a href="index.html">Home</a> </li>
            <li> <a href="items.html">Items</a> </li>
            <li> <a href="#">Contact Us</a> </li>
            <li> <a href="login.html">Login</a> </li>
            <li> <a href="signup.html">Signup</a> </li>

        </ul>
    </div>
    <!-- end of header part -->
    <div class="space"></div>

    <!--  item information  -->
    <div class="info">
        <!-- ====================  item photo  -->
        <div class="photo">
            <img src="images/albert.jpg" class="main" alt="main image">
            <div class="over-images">
                <img src="images/albert.jpg" class="img" alt="">
                <img src="images/albert.jpg"  class="img" alt="">
                <img src="images/albert.jpg" class="img" alt="">
            </div>
        </div>
        <!-- ====================  end of item photo  -->
        <div class="data">
            <h2>Item Name: I phone 7</h2>
            <p>Size: 1024 X 970</p>
            <p>Price: EGP.8700</p>
            <p>Category: Iphone</p>
            <p>Production Date: 02-05-2020</p>
            <p>Transportation:Included</p>
            <button>Buy Now</button>
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard"
             data-action="like" data-size="small" data-share="true"></div>
        </div>
        <!-- ================================ -->
        <div class="info-ads">

            <img src="" alt="ads here">
        </div>
        <!-- ================================ -->
    </div>
    <!--  item information  -->
    <!-- ============ ads ================ -->
    <div class="ads"></div>
    <!-- ============ ads ================ -->
    <!-- ============ full desc -->
    <div class="desc">
        <h1>Full Description</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id mollitia aliquid ducimus officiis iusto eaque,
            cum dicta accusantium saepe quis voluptas, possimus eius alias voluptate voluptatem nulla omnis molestias
            perspiciatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id mollitia aliquid ducimus officiis iusto eaque,
            cum dicta accusantium saepe quis voluptas, possimus eius alias voluptate voluptatem nulla omnis molestias
            perspiciatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id mollitia aliquid ducimus officiis iusto eaque,
            cum dicta accusantium saepe quis voluptas, possimus eius alias voluptate voluptatem nulla omnis molestias
            perspiciatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id mollitia aliquid ducimus officiis iusto eaque,
            cum dicta accusantium saepe quis voluptas, possimus eius alias voluptate voluptatem nulla omnis molestias
            perspiciatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id mollitia aliquid ducimus officiis iusto eaque,
            cum dicta accusantium saepe quis voluptas, possimus eius alias voluptate voluptatem nulla omnis molestias
            perspiciatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id mollitia aliquid ducimus officiis iusto eaque,
            cum dicta accusantium saepe quis voluptas, possimus eius alias voluptate voluptatem nulla omnis molestias
            perspiciatis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id mollitia aliquid ducimus officiis iusto eaque,
            cum dicta accusantium saepe quis voluptas, possimus eius alias voluptate voluptatem nulla omnis molestias
            perspiciatis.
        </p>
    </div>
    <!-- ============ full desc -->
    <!-- ============ who upload it  -->
    <div class="space"></div>
    <div class="who">
        <div class="image">
            <img src="images/albert.jpg" alt="">
        </div>
        <div class="who_info">
            <h3>Supplier Name </h3>
            <p>
                Bio: Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem placeat vel voluptatum cum
                voluptas sapiente soluta quidem nisi libero impedit. Doloribus praesentium nisi recusandae laudantium
                nesciunt neque, debitis inventore iure.

            </p>
        </div>
    </div>
    <!-- ============ who upload it  -->
    <div class="space"></div>
    <!-- ========= comments-->
    <div class="comments">
        <div class="make_comment">
           <textarea></textarea>
            <button>Post</button>
        </div>
        <div class="space"></div>
        <!-- ============ comment part -->
        <div class="comment">
            <div class="comment_head">
                <div class="photo">
                    <img src="images/albert.jpg" alt="user photo">
                </div>
           
                <div class="timedate">
                    <p id="name">User Name</p>
                    <p>date: 20-10-2020 05:30:12</p>
                </div>
            </div>
            <div class="comment_body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, ea hic vitae amet perspiciatis quam
                    magni? Adipisci eveniet unde corporis enim beatae culpa eligendi quis voluptate ad, inventore
                    sapiente commodi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ipsam quisquam blanditiis consequatur
                    earum nihil, repudiandae esse tempora illum, sapiente adipisci dicta accusamus voluptas deleniti
                    mollitia laborum excepturi. Laudantium, aspernatur?

                </p>
            </div>
        </div>
        <!-- ============ comment part -->

  <!-- ============ comment part -->
  <div class="comment">
    <div class="comment_head">
        <div class="photo">
            <img src="images/albert.jpg" alt="user photo">
        </div>
   
        <div class="timedate">
            <p id="name">User Name</p>
            <p>date: 20-10-2020 05:30:12</p>
        </div>
    </div>
    <div class="comment_body">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, ea hic vitae amet perspiciatis quam
            magni? Adipisci eveniet unde corporis enim beatae culpa eligendi quis voluptate ad, inventore
            sapiente commodi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ipsam quisquam blanditiis consequatur
            earum nihil, repudiandae esse tempora illum, sapiente adipisci dicta accusamus voluptas deleniti
            mollitia laborum excepturi. Laudantium, aspernatur?

        </p>
    </div>
</div>
<!-- ============ comment part -->

  <!-- ============ comment part -->
  <div class="comment">
    <div class="comment_head">
        <div class="photo">
            <img src="images/albert.jpg" alt="user photo">
        </div>
   
        <div class="timedate">
            <p id="name">User Name</p>
            <p>date: 20-10-2020 05:30:12</p>
        </div>
    </div>
    <div class="comment_body">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, ea hic vitae amet perspiciatis quam
            magni? Adipisci eveniet unde corporis enim beatae culpa eligendi quis voluptate ad, inventore
            sapiente commodi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ipsam quisquam blanditiis consequatur
            earum nihil, repudiandae esse tempora illum, sapiente adipisci dicta accusamus voluptas deleniti
            mollitia laborum excepturi. Laudantium, aspernatur?

        </p>
    </div>
</div>
<!-- ============ comment part -->

    </div>
    <!-- ========= comments-->
 <div class="space"></div>
    <div>
        <h2 id="seealso">See Also</h2>
    </div>
    <!-- parent items -->
    <div class="parent_items">
        <!-- item part -->
        <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->

          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->

          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->


          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->


          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->


          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->


          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->


          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->


          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->


          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->


          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->

          <!-- item part -->
          <div class="item_part">
            <button>add to cart</button>
            <img src="images/albert.jpg" width="200" height="200" alt="">
            <p id="price">Price EGP.500</p>
            <p id="name">Item name</p>
            <p id="desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi omnis nisi eveniet, sunt, consequuntur iure enim impedit distinctio facilis quia labore illum. Tempora esse obcaecati quae accusantium ut sapiente.
            </p>
            <a href="itemdetail.html">More</a>
         
        </div>
        <!-- end of item part -->



    </div>

    <!-- parent items -->





</body>

</html>