@include('admin.layouts.header')
    
        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-newspaper-o" style="margin-right: 20px;color: #4da5e2;"></i> Posts</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="admin-tables">

                                <div class="searchItems">
                                    <input type="text"  id="myInput" onkeyup="myFunction()" placeholder="Search for Title">
                                </div>
                                <table class="itemsTable" id="myTable">
                                    <tr class="tableHeader">
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Body</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td> {{ $post->id }} </td>
                                        <td> {{ $post->title }} </td>
                                        <td style="text-align: center"> {{ $post->category->name }} </td>
                                        <td>
                                            {!! \Illuminate\Support\Str::limit($post->content, 80) !!}  
                                        </td>
                                        <td>published</td>
                                        <td>
                                            <img src=" {{ asset('/'.$post->image)}} " alt="" width="80px" height="50px">
                                        </td>
                                        <td class="action">
                                            <a href=" {{ route('admin.posts.edit', $post->id)  }} "><i class="fa fa-edit text-success"title="Edit property"></i></a>
                                            <form action=" {{route('admin.posts.destroy', $post->id) }} " method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn-destroy" title="Delete user"><i class="fa fa-trash-o text-danger" ></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
    
                                </table>
                                {{ $posts->links() }}
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