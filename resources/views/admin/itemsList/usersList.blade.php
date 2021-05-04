@include('admin.layouts.header')

        <div class="admin-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 box-container" style="margin-top: 20px; ">
                            <!-- general form elements -->
                            <div class="box box-info">
                              <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-users" style="margin-right: 20px;color: #4da5e2;"></i> Agents</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="admin-tables">
                                <div class="searchItems">
                                    <input type="text"  id="myInput" onkeyup="myFunction()" placeholder="Search for Name">
                                </div>
                                <table class="itemsTable" id="myTable">
                                    <tr class="tableHeader">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Avatar</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td> {{$user->id}} </td>
                                            <td> {{$user->name}} </td>
                                            <td> {{$user->email}} </td>
                                            <td> {{ implode(' , ' , $user->roles()->get()->pluck('name')->toArray()) }} </td>
                                            <td>
                                                <img src="{{ asset('Images/'.$user->avatar) }} " alt="" width="70px" height="70px" style="border-radius: 50%">
                                            </td>
                                            <td class="action">
                                                {{-- <a href=""><i class="fa fa-eye text-primary" title="View property"></i></a> --}}
                                            <a href="{{ route('admin.users.edit', $user->id)}} ">
                                                <i class="fa fa-edit text-success"title="Edit user"></i>
                                            </a>
                                            <form action=" {{route('admin.users.destroy', $user->id) }} " method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn-destroy" title="Delete user"><i class="fa fa-trash-o text-danger" ></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{ $users->links() }}
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