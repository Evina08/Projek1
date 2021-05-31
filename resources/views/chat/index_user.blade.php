@extends('layouts.layout')
 @section('content')
 <style>
    
    .containerku {
      border: 2px solid #dedede;
      background-color: #f1f1f1;
      border-radius: 5px;
      padding: 10px;
      margin-top: 10px;
    }
    
    .darker {
      border-color: #ccc;
      background-color: #ddd;
    }
    
    .containerku::after {
      content: "";
      clear: both;
      display: table;
    }
    
    .containerku img {
      float: left;
      max-width: 60px;
      width: 100%;
      margin-right: 20px;
      border-radius: 50%;
    }
    
    .containerku img.right {
      float: right;
      margin-left: 20px;
      margin-right:0;
    }
    
    .time-right {
      float: right;
      color: #aaa;
    }
    
    .time-left {
      float: left;
      color: #999;
    }
    </style>
<div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Chatting</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Chatting</a>
                        </div>
                    </div>
                  </div>
                </div>
                <form action="/send_pesan_user" method="POST">
                  @csrf
 <div class="portfolio">
     <div class="col-12">
         <div class="row">
           @foreach ($data as $item)
           <div class="container containerku <?php if($item->type=='user'){echo "darker";} ?>">
            <?php if($item->type=='user'){ ?>
              You
              <?php }else{?>
                Admin
                <?php }?>
            <p>{{$item->comment}}</p>
          </div>
           @endforeach
      
      <div class="container p-0" style="margin-top: 15px">
          <div class="row">
          <div class="col-11">
        <input type="text" name="comment" class="form-control" placeholder="Say hi...........">
    </div>
    <div class="col-1">
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
  </div>
</div>
</div>
</form>
         
     </div>
</div>
 @endsection