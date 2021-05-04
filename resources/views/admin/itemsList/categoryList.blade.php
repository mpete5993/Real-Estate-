@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-bookmark" style="margin-right: 20px;color: #4da5e2;"></i> Categories</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="admin-tables">

                                <div class="searchItems">
                                    <input type="text"  id="myInput" onkeyup="myFunction()" placeholder="Search for Category">
                                </div>
                                <table class="itemsTable" id="myTable">
                                    <tr class="tableHeader">
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id}} </td>
                                        <td> {{ $category->name}} </td>
                                        <td class="action">
                                            <a href="{{ route('admin.categories.edit', $category->id) }} "><i class="fa fa-edit text-success"title="Edit category"></i></a>
    
                                            <form action=" {{route('admin.categories.destroy', $category->id) }} " method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn-destroy" title="Delete user"><i class="fa fa-trash-o text-danger" ></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
    
                                </table>
                                {{ $categories->links() }}
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
                td = tr[i].getElementsByTagName("td")[1];
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