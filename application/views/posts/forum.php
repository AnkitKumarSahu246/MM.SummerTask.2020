<h2 style="text-align: center;color: green"><b><?php echo $status; ?></b></h2>
<div class="card" style = "margin-left:15px;margin-right:15px ;background-color: white;">
  <div class="container-fluid">
      <form class = 'form-inline' style = "margin-top: 5px;margin-bottom: 5px;" method = 'post' action = 'forum'>
        <div class="form-group">
          <label for="exampleInput2">Ask Question</label>
          <input type="text" style="width: 980" class="form-control" id="exampleInput2" placeholder="Ask a question...." name = "question">
        </div>
        <button style="margin-left: 500px;margin-top: 5px;" type="submit" class="btn btn-default">Submit</button>
      </form>
  </div>
</div>
<br>
<div class="card" style = "margin-left:15px;margin-right:15px; background-color: white;">
  <div class="container-fluid">
      <form style = "margin-top: 5px;margin-bottom: 5px;" class = 'form-inline'>
        <div class="form-group">
          <label for="exampleInput1">Search Query</label>
          <input type="text" style="width: 979" class="form-control" id="exampleInput1" placeholder="Search">
        </div>
        <button type="submit" style="margin-left: 500px;margin-top: 5px;" class="btn btn-default">Search</button>
      </form>
  </div>
</div>

<br>

<div>
  <h3 style="text-align: center;color: green;text-decoration: underline;"><b>Current Listed Queries</b></h3>
</div>

<br>

<?php foreach ($forum_item as $forums): ?>
<div style="width: 980" class = "container">
     <!-- <table border="1px"> -->
      <?php if($forums['Answers'] !== NULL){ ?>
        <div class="card" style = "background-color: white;">
          <div class="container-fluid">
            <h4 class="pick"><?php echo $forums['Questions']; ?></h4>
            <p class="pick"><?php echo $forums['Answers']; ?></p>
          </div>
        </div>
      <?php } ?> 
</div>
<br>
 <?php endforeach; ?>   
 
