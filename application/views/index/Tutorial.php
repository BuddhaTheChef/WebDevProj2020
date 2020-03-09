<?php
//application/views/index/index.php

$this->load->view($this->config->item('theme') . 'header');

?>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    .container {
        width: 100%;
    }

    .tutorial-title {
        text-align: center;
    }

    .image-div {
        display: flex;
        justify-content: space-around;
        width: 100%;
        background-color: rgb(60,60,60);
    }

    .img-tut {
        margin: 30px;
        height: 700px;
        background: whitesmoke;
    border-radius: 30px;
    padding: 10px 10px 50px 10px;
    transition: all 0.5s ease;
    }

    .img-tut:hover {
  
  -webkit-box-shadow: 0 4px 15px -5px #818181; box-shadow: 0 4px 15px -5px #818181;
}

    .content-div {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: #eb6864;
    }

    .description-div {
        height: 400px;
        width: 90%;
    padding: 10px 40px;
    line-height: 1.5;
    border-radius: 30px;
    margin: 33px;
    background: white;
    border: solid lightgray 5px;
    -webkit-box-shadow: 0 4px 15px -5px #818181;
    box-shadow: 0 4px 15px -5px #818181;
}

    .creator-div {
        height: 227px;
        width: 54%;
    padding: 10px 40px;
    line-height: 1.5;
    border-radius: 30px;
    margin: 33px;
    background: white;
    border: solid lightgray 5px;
    -webkit-box-shadow: 0 4px 15px -5px #818181;
    box-shadow: 0 4px 15px -5px #818181;
}

.img-creator {
    border-radius: 50%;
    border: solid lightgray 2px;
    height: 78px;
}

.top-creater-div {
    display: flex;
    flex-direction: row;
    align-items: center;
}

    .main-top-div {
        display: flex;
        flex-direction: column;
    }

    .instruction-div{
        width: 50%;
    padding: 40px;
    line-height: 1.5;
    border-radius: 30px;
    margin: 33px;
    background: white;
    border: solid lightgray 5px;
    -webkit-box-shadow: 0 4px 15px -5px #818181; box-shadow: 0 4px 15px -5px #818181;
    }

    h3 {
        font-size: 40px;
    }

    p {
        font-size: 20px !important;
    }

    .date-create {
        margin-left: 99px;
    margin-top: -24px;
    }
    li {
        font-size: 25px !important;
    }
.button-div {
    display: flex;
    justify-content: flex-start;
    height: 94px;
    align-items: center;
}
#like-button{
    height: 20px;
    margin-bottom: 18px;
    margin-right: 20px;
}
#like-button:hover {
    cursor: pointer;
    color: #cd0928;
}

#like-button.not-liked {
    color: #000;
}

#like-button.not-liked:hover {
    color: #cd0928;
}

#like-button.liked {
    color: #cd0928;
}

#like-button.liked-shaked {
    animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
    transform: translate3d(0, 0, 0) rotate(0deg);
    transform: rotate(0deg);
    backface-visibility: hidden;
    perspective: 1000px;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(0, 0px, 0) rotate(0deg);;
  }

  20%, 80% {
    transform: translate3d(0, -2px, 0) rotate(5deg);
  }

  30%, 50%, 70% {
    transform: translate3d(0, 0px, 0) rotate(0deg);
  }

  40%, 60% {
    transform: translate3d(0, -2px, 0) rotate(-5deg);
  }
}

</style>
    
 <h1 class="tutorial-title">Tutorial page<h1>

<div class="main-tutorial-div">
<div class="image-div">
    <img class="img-tut" src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80"  alt="Visuel"/>
    <div class="main-top-div">
    <div class="description-div">
    <h3>Description</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="creator-div">
<div class="top-creater-div">
<img class="img-creator" src="https://images.unsplash.com/photo-1518806118471-f28b20a1d79d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80"  alt="Visuel"/>
 <h3 style="margin-left: 30px; margin-top: -13px;">User-name</h3>
 </div>
 <p class="date-create"><span style="font-weight: bold">Date Created:</span> 12/14/2020 </p>
 <div class="button-div">
    <i id="like-button" class="fa fa fa-heart-o not-liked"></i>
<button class="btn-primary" style="border-radius: 10px; font-size: 20px; margin-right: 20px; padding: 10px;">More Content</button>
<button class="btn-default" style="border-radius: 10px; font-size: 20px; padding: 10px;">Share...</button>
</div>
</div>
</div>
</div>
<div class="content-div">
<div class="instruction-div">
<h3>Instructions</h3>
<ol>
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet. Nunc lobortis mattis aliquam faucibus purus.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet. Nunc lobortis mattis aliquam faucibus purus.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet. Nunc lobortis mattis aliquam faucibus purus.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet. Nunc lobortis mattis aliquam faucibus purus.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet. Nunc lobortis mattis aliquam faucibus purus.</li>
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet. Nunc lobortis mattis aliquam faucibus purus.</li>
</ol>
</div>

<div class="comment-div">
<h2>Comments</h2>
<input placeholder="Enter Text Here..."/>
</div>

</div>
</div>

<script language='javascript'>
var like_button = document.getElementById("like-button");
  if (like_button) {
      like_button.addEventListener("click", doLikeButton);
  }
  
  function doLikeButton(e) {
      toggleButton(e.target);
  }
  
  function toggleButton(button) {
      button.classList.remove('liked-shaked');
      button.classList.toggle('liked');
      button.classList.toggle('not-liked');
      button.classList.toggle('fa-heart-o');
      button.classList.toggle('fa-heart');
  
      if(button.classList.contains("liked")) {
          button.classList.add('liked-shaked');
      }
  }
</script>
<?php
    

?>
