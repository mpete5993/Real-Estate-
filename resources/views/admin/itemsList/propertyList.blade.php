@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                  <h3 class="box-title"> <i class="fa fa-building" style="margin-right: 20px;color: #4da5e2;"></i> Properties</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="admin-tables">
  
                                  <div class="searchItems">
                                      <input type="text"  id="myInput" onkeyup="myFunction()" placeholder="Search for Address">
                                  </div>
                                  <table class="itemsTable" id="myTable">
                                      <tr class="tableHeader">
                                          <th>Address</th>
                                          <th>Description</th>
                                          <th>Category</th>
                                          <th>Price</th>
                                          <th>Status</th>
                                          <th>Image</th>
                                          <th>Action</th>
                                      </tr>
                                      @foreach ($properties as $property)
                                          <tr>
                                              <td> 
                                                  {{ $property->street }} {{ $property->city }}<br>
                                                  {{ $property->province }} {{ $property->zipCode }}
                                              </td>
                                              <td> {{ $property->description }}  </td>
                                              <td>{{ $property->category->name }} </td>
                                              <td>$ {{ $property->price }}  </td>
                                              <td>{{ $property->status }} </td>
                                              <td>
                                                  <img src=" {{ asset( $property->image )}} " alt="" width="80px" height="50px">
                                              </td>
                                              <td class="action">
                                                  <a href=" {{ route('admin.properties.edit', $property->id)}} "><i class="fa fa-edit text-success"title="Edit property"></i></a>
                                                  <form action=" {{route('admin.properties.destroy', $property->id) }} " method="post">
                                                      @csrf
                                                      {{ method_field('DELETE') }}
                                                      <button class="btn-destroy" title="Delete property"><i class="fa fa-trash-o text-danger" ></i></button>
                                                  </form>
                                              </td>
                                          </tr>
                                      @endforeach
                                  </table>
                                  {{ $properties->links() }}
                              </div>
                              </div>
                              
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        function myFunction() {
            // Declare variables
            let input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
        }
    </script>
    
@include('admin.layouts.footer')