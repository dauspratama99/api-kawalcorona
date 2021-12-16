<x-app-layout title="Data Indonesia">
    <h4>Kawal Corona API</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    Data
                                </th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script>
            $(document).ready(() => {
                $.post("/indonesia", {_token : "{{ csrf_token() }}"}, (result) => {

                    keys = Object.keys(result[0]);
                    let row = "";
                    keys.forEach(item => {
                        row += "<tr>"
                        if(item != 'name') {
                            row += '<td>'+item+'</td><td>'+result[0][item]+'</td>'
                        }
                        row += "</tr>";
                    });

                    $('tbody').html(row);
                })
            })
        </script>
    </x-slot>
</x-app-layout>