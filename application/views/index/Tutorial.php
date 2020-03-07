<?php
//application/views/index/index.php

$this->load->view($this->config->item('theme') . 'header');

?>
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
        width: 70%;
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
    height: 60px;
}

.top-creater-div {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: baseline;
}

    .main-top-div {
        display: flex;
        flex-direction: column;
        align-items: center;
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
        font-size: 25px !important;
    }
    li {
        font-size: 25px !important;
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
 <h3>Username</h3>
 <p><span style="font-weight: bold">Date Created:</span> 12/14/2020 </p>
 </div>
<button>Heart button here</button>
<button>More tutorials</button>
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
</div>
</div>

<?php
    

?>
