<form method="POST" action="{{route('art.create')}}" enctype="multipart/form-data">
  @csrf
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" required><br>

  <label for="description">Description:</label><br>
  <textarea id="description" name="description" required ></textarea><br>
  <select name="type" id="" required >
    <option value="health" >Health</option> 
    <option value="training">Training</option>
    <option value="nutrition">Nutrition</option>
  </select>

  <label for="content">Content:</label><br>
  <textarea id="content" name="content" required></textarea><br>

  <label for="image">Image:</label><br>
  <input type="file" id="image" name="image_path" required><br>

  <input type="submit" value="Submit">
</form>
 <!-- ======= Home Section ======= -->
 <!-- <section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Team Of Fitness</h1>
      <h2><i>- "Believe In Yourself Every Single Day And You WIill Be Unstoppable" -</i></h2>
    </div>
  </section> -->
  <!-- End Home -->