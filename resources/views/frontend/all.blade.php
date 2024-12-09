<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">SL NO.</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contact as $contacts )
    
    <tr>
      <th scope="row">#</th>
      <td>{{$contacts->name}}</td>
      <td>{{$contacts->email}}</td>
      <td>{{$contacts->phone}}</td>
      <td>{{$contacts->message}}</td>
      
      <td><a href="{{ url('/secretcontactdelte/' . $contacts->id) }}">
    <button class="btn btn-danger">Delete</button>
  </a></td>
    </tr>
    @endforeach
   
  </tbody>
</table>