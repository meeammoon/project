        
       <form action="" method="post" enctype="multipart/form-data">
       @csrf
       <div>
       <label for="file"> Choose file </label>
      
         <input type="file" class="input-control" name="file" id="file" />
        </div>
        <button type="submit">Upload</button>
        </form>