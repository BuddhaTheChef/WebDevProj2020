<?php 
//application/views/index/index.php

$this->load->view($this->config->item('theme') . 'header');

?>
<style>
.title-home {
text-align: center;
font-weight: bold;
font-size: 35px;
}

#container {
	width: 100%;
  column-count: 4;
  column-gap: 1em;
margin-top: 50px;
}
.container {
  width: 100%;
  column-gap: 1em;
}
.grid-item:hover {
  
  -webkit-box-shadow: 0 4px 15px -5px #818181; box-shadow: 0 4px 15px -5px #818181;
}
.grid-item {
    border-radius: 30px;
  display: inline-block;
  margin: 0 0 1em;
  width: 100%;
  transition: all 0.5s ease;
	background-color: #fff;
	padding: 2px;
	margin: 5px;
  text-align: center;
}
h2 { font-size: 1em; text-align: center; margin-top: 10px;}
img { max-width: 100%; border-radius: 30px;}

</style>



<h1 class="title-home"> Dashboard</h1>
<div id="container">
    <div class="grid">

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 1</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1523554888454-84137e72c3ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 2</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1549490349-8643362247b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 3</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1499781350541-7783f6c6a0c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2615&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 4</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item" id="myBtn">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1526304760382-3591d3840148?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 5</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1523554888454-84137e72c3ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 6</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1526304760382-3591d3840148?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 7</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 8</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1523554888454-84137e72c3ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 6</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 9</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

         <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1526304760382-3591d3840148?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 1</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1523554888454-84137e72c3ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 2</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 3</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1567119715747-ff9c10f46115?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=882&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 4</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1523554888454-84137e72c3ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 5</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1567119715747-ff9c10f46115?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=882&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 6</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1300&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 7</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1567119715747-ff9c10f46115?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=882&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 8</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->

        <div class="grid-item">
            <div class="grid-item-img">
                <img src="https://images.unsplash.com/photo-1523554888454-84137e72c3ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"  alt="Visuel">
            </div> <!-- /.grid-item-img -->
            <div class="grid-item-caption">
                <h2>Title 9</h2>
            </div> <!-- /.grid-item-caption -->
        </div><!-- /.grid-item -->
        
        
        
    </div><!-- /.grid -->
</div>

  <script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = 'http://web-students.net/site121/5';
    });
  </script>

<?php

$this->load->view($this->config->item('theme') . 'footer');

?>