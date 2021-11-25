<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../css/style-question.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha512-9BwLAVqqt6oFdXohPLuNHxhx36BVj5uGSGmizkmGkgl3uMSgNalKc/smum+GJU/TTP0jy0+ruwC3xNAk3F759A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Stack DSA | Think-Code</title>
</head>

<body>
    <section class="navbar background">
    <nav>
            <!-- <button class="toggleBtn" onclick="menutoggle()"><img src="img/menu.png" class="menu-icon"
                    style="width: 30px; position: absolute; left: 0; top: 20px; margin-left: 20px;"></button> -->
            <ul class="nav-list" id="MenuItems">
                <li><a href="../index">Home</a></li>
                <li><a href="../about">About</a></li>
                <li><a href="../feedback">Feedback</a></li>
            </ul>
        </nav>
        <div class="menu-btn" onclick="menutoggle()">
            <div class="menu-burger"></div>
        </div>
        <div class="rightnav">
            <input type="text" name="search" id='search' placeholder="Search" onkeyup="search_filter()">
            <button class="btn btn-sm" onclick="search_filter()">Search</button>
        </div>
        <!-- <button onclick="myFunction()">Toggle dark mode</button> -->
        </nav>
    </section>

    <div class="content" id="down">
        <span style="content: \2600; font-size: 40px;">&#9728;</span>
        &nbsp;
        <input type="checkbox" id="tooglenight" class="cbx hidden" />
        <label for="tooglenight" class="switch" onclick="myFunction()"></label>
        &nbsp;&nbsp;&nbsp;
        <span style="content: \1F319; font-size: 35px;">&#9790;</span>
    </div>
    <section class="box">
        <hr>
        <h1>Stack in Data Structure and algorithm :</h1>
        <div class="iframe-container">
            <iframe class="main-iframe" src="https://www.youtube.com/embed/gIQrDUqx88s"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe></div>
        <hr>
        <h3>What is Stack ?</h3>
        <p>A stack is a linear data structure that follows the LIFO Principal. <br>
            LIFO means = Last In First Out <br>
            A stack can be defined as a container in which insertion and deletion can be performed from the one end
            known as the top of the stack.
        </p>
        <p class="img-mid">
            <img src="../img/stack_lifo.jpeg" alt="stack representation">
        </p>
        <br>
        <h3>Real Life example of Stack :</h3>
        <p>This is the real life example of stack.</p>
        <p class="img-mid"><img src="../img/stack-ex.png" alt="" style=" width: 27%;"></p>
        <br>
        <h3>Standard Stack Operations :</h3>
        <p>
            o <strong>push()</strong>: When we insert an element in a stack then the operation is known as a push. If
            the stack is full then the overflow condition occurs. <br>
            o <strong>pop()</strong>: When we delete an element from the stack, the operation is known as a pop. If the
            stack is empty means that no element exists in the stack, this state is known as an underflow state. <br>
            o <strong>isEmpty()</strong>: It determines whether the stack is empty or not. <br>
            o <strong>isFull()</strong>: It determines whether the stack is full or not.' <br>
            o <strong>peek()</strong>: It returns the element at the given position. <br>
            o <strong>count()</strong>: It returns the total number of elements available in a stack. <br>
            o <strong>change()</strong>: It changes the element at the given position. <br>
            o <strong>display()</strong>: It prints all the elements available in the stack. <br>

        </p>
        <br>
        <hr>
        <br>
        <h1>Stack Implementation Using Array </h1>
        <h3>PUSH Algothim :</h3>

        <p>o <b>Step 1</b>: Checks if the Stack is full</p>
        <p>o <b>Step 2</b>: If the stack is full, Produces an error and exit.</p>
        <p>o <b>Step 3</b>: If the stack is not full, increments <strong>top</strong> to point next empty space.</p>
        <p>o <b>Step 4</b>: Adds data element to the stack location, where top is pointing.</p>
        <p>o <b>Step 5</b>: Return success</p>

        <br>
        <p class="img-mid">
            <img src="../img/push_operation.jpeg" alt="">
        </p>

        <pre class="prettyprint notranslate prettyprinted"
            ><span class="kwd">begin</span><span class="pln"> procedure push</span><span class="pun">:</span><span class="pln"> stack</span><span class="pun">,</span><span class="pln"> data

   </span><span class="kwd">if</span><span class="pln"> stack </span><span class="kwd">is</span><span class="pln"> full
      </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">null</span><span class="pln">
   endif
   
   top </span><span class="pun">←</span><span class="pln"> top </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
   stack</span><span class="pun">[</span><span class="pln">top</span><span class="pun">]</span><span class="pln"> </span><span class="pun">←</span><span class="pln"> data

</span><span class="kwd">end</span><span class="pln"> procedure</span>
</pre>

        <!-- code -->
        <br>
        <h3>Push Function Code :</h3>


        <pre class="prettyprint notranslate prettyprinted"><span class="kwd">void</span><span class="pln"> push</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> data</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="kwd">if</span><span class="pun">(!</span><span class="pln">isFull</span><span class="pun">())</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
           top </span><span class="pun">=</span><span class="pln"> top </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">   
           stack</span><span class="pun">[</span><span class="pln">top</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> data</span><span class="pun">;</span><span class="pln">
        </span><span class="pun">}</span><span class="pln"> </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
           printf</span><span class="pun">(</span><span class="str">"Stack is full.\n"</span><span class="pun">);</span><span class="pln">
        </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>

        <p>Here we have used isFull() Function, Let's see what is isFull() function algorithm</p>

        <br>
        <hr>
        <br>
        <h3>isFull Algothim:</h3>
        <br>
        <pre class="prettyprint notranslate prettyprinted"><span class="kwd">begin</span><span class="pln"> procedure isfull

        </span><span class="kwd">if</span><span class="pln"> top equals to MAXSIZE
           </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">true</span><span class="pln">
        </span><span class="kwd">else</span><span class="pln">
           </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pln">
        endif
        
</span><span class="kwd">end</span><span class="pln"> procedure</span></pre>

        <br>
        <h3>isFull Function Code:</h3>
        <pre class="prettyprint notranslate prettyprinted"><span class="kwd">bool</span><span class="pln"> isfull</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">top </span><span class="pun">==</span><span class="pln"> MAXSIZE</span><span class="pun">)</span><span class="pln">
           </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span><span class="pln">
        </span><span class="kwd">else</span><span class="pln">
           </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>

        <br>
        <hr>
        <br>
        <p>let's see wheather my stack is empty or not &#129300;</p> 
        <h3>isEmpty Function Algothim:</h3>
        <pre class="prettyprint notranslate prettyprinted"><span class="kwd">begin</span><span class="pln"> procedure isempty

        </span><span class="kwd">if</span><span class="pln"> top less than </span><span class="lit">1</span><span class="pln">
           </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">true</span><span class="pln">
        </span><span class="kwd">else</span><span class="pln">
           </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pln">
        endif
        
</span><span class="kwd">end</span><span class="pln"> procedure</span></pre>

        <h3>isEmpty Function code:</h3>
        <pre class="prettyprint notranslate prettyprinted"><span class="kwd">bool</span><span class="pln"> isempty</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">top </span><span class="pun">==</span><span class="pln"> </span><span class="pun">-</span><span class="lit">1</span><span class="pun">)</span><span class="pln">
           </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span><span class="pln">
        </span><span class="kwd">else</span><span class="pln">
           </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
        <br>
        <hr>
        <br>
        <p>Now let's see pop oparation and it's algorithm</p>
        <h3>Pop Operations : </h3>
        <br>
        <p>o <b>Step 1</b>: Checks if the Stack is full</p>
        <p>o <b>Step 2</b>: If the stack is empty, produces an error and exit</p>
        <p>o <b>Step 3</b>: If the stack is not empty, accesses the data element at which <strong>top</strong>  is pointing.</p>
        <p>o <b>Step 4</b>: Decreases the value of top by 1.</p>
        <p>o <b>Step 5</b>: Return success</p>
        <p class="img-mid">
            <img src="../img/pop_operation.jpeg" alt="pop operation">
        </p>
        <br>

        <h3>Pop Algothim: </h3>
        <br>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">begin</span><span class="pln"> procedure pop</span><span class="pun">:</span><span class="pln"> stack

        </span><span class="kwd">if</span><span class="pln"> stack </span><span class="kwd">is</span><span class="pln"> empty
           </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">null</span><span class="pln">
        endif
        
        data </span><span class="pun">←</span><span class="pln"> stack</span><span class="pun">[</span><span class="pln">top</span><span class="pun">]</span><span class="pln">
        top </span><span class="pun">←</span><span class="pln"> top </span><span class="pun">-</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
        </span><span class="kwd">return</span><span class="pln"> data
     
</span><span class="kwd">end</span><span class="pln"> procedure</span></pre>

        <br>
        <h3>Pop Function Code :</h3>
        <br>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">int</span><span class="pln"> pop</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> data</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

        </span><span class="kwd">if</span><span class="pun">(!</span><span class="pln">isempty</span><span class="pun">())</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
           data </span><span class="pun">=</span><span class="pln"> stack</span><span class="pun">[</span><span class="pln">top</span><span class="pun">];</span><span class="pln">
           top </span><span class="pun">=</span><span class="pln"> top </span><span class="pun">-</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">   
           </span><span class="kwd">return</span><span class="pln"> data</span><span class="pun">;</span><span class="pln">
        </span><span class="pun">}</span><span class="pln"> </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
           printf</span><span class="pun">(</span><span class="str">"Stack is empty.\n"</span><span class="pun">);</span><span class="pln">
        </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
        <br>
        <hr>
        <br>
        <h3>Peek Algothim : </h3>
        <p>Now if i want to know the top element or you can say peek elemetn then ? &#129300;</p>
        <p>Let's see</p>
        <br>
        <pre class="prettyprint result notranslate">begin procedure peek
    return stack[top]
end procedure</pre>

        <h3>Peek Function Code : </h3>
        <pre class="prettyprint notranslate prettyprinted" style=""><span class="kwd">int</span><span class="pln"> peek</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="kwd">return</span><span class="pln"> stack</span><span class="pun">[</span><span class="pln">top</span><span class="pun">];</span><span class="pln">
</span><span class="pun">}</span></pre>
        <!-- share -->

        <div class="share-btn-container">
            <h1 class="full-text" style="font-size: 15px; font-family: 'Poppins', sans-serif;">Share it&nbsp; &#8594;</h1>
            <a href="#" class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#" class="facebook-btn">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="twitter-btn">
                <i class="fab fa-twitter"></i>
            </a>
        </div>

        <!-- Next - Previous -->
        <div class="next-pre">
            <a href="#" class="previous">&laquo; Previous</a>
            <a href="#" class="next">Next &raquo;</a>
        </div>

    </section>





    <!-- -----------------Footer--------------- -->



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-2">
                    <img src="../img/profile.jpg" alt="logo">
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <hr>
                    <ul>
                        <li><a href="https://www.youtube.com/watch?v=p6GI-co45IY&list=PL_rmipHSvQlyx2DCSOh6Yfh1WA8b22abM"
                                target="_blank">Python Video Tutorial</a></li>
                        <li><a href="https://www.youtube.com/watch?v=9qqQjuspmPI&list=PL_rmipHSvQlyRn_lxIQRyYOWnHj4aY8rY"
                                target="_blank">DSA Video Tutorial</a></li>
                        <li><a href="https://www.youtube.com/watch?v=EOpvZlGCmz0&list=PL_rmipHSvQlyg54Jhr-MjXWlHgNKgS51e"
                                target="_blank">DSA Problem Sheet</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <hr>
                    <ul>
                        <li><a href="https://www.facebook.com/krishnendu.roy.501598/" target="_blank">Facebook</a></li>
                        <li><a href="https://github.com/CodeHereBro" target="_blank">github</a></li>
                        <li><a href="https://www.instagram.com/krishnendu_roy52/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.youtube.com/channel/UCyJXQWe8mwX6EdKwIyHecAA"
                                target="_blank">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright &copy; By krishnendu Roy</p>
        </div>

        <!-- JScript -->
        <script>
            const facebookBtn = document.querySelector(".facebook-btn");
            const twitterBtn = document.querySelector(".twitter-btn");
            const pinterestBtn = document.querySelector(".pinterest-btn");
            const whatsappBtn = document.querySelector(".whatsapp-btn");

            function init() {
                let postUrl = encodeURI(document.location.href);
                let postTitle = encodeURI("Hi everyone, please check this out: ");
                whatsappBtn.setAttribute(
                    "href",
                    `https://wa.me/?text=${postTitle} ${postUrl}`
                );

                facebookBtn.setAttribute(
                    "href",
                    `https://www.facebook.com/sharer.php?u=${postUrl}`
                );

                twitterBtn.setAttribute(
                    "href",
                    `https://twitter.com/share?url=${postUrl}&text=${postTitle}`
                );
            }

            init();
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="../js/question.js"></script>
</body>

</html>