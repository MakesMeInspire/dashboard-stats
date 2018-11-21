<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Pengguna</h4>
                                <p class="category">Detail data mahasiswa</p>
                            </div>
                            <div class="content table-responsive table-full-width" style="padding:30px">
                                <table id="data-tabel" class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Nim</th>
                                    	<th>Nama</th>
                                    	<th>Kasus</th>
                                    	<th>Kesempatan</th>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty($datatabel) && is_array($datatabel)){
                                        foreach($datatabel as $value){
                                            ?>
                                            <tr>
                                                <td><?php echo $value['id']; ?></td>
                                                <td><?php echo $value['nim']; ?></td>
                                                <td><?php echo $value['nama']; ?></td>
                                                <td><?php echo $value['question']; ?></td>
                                                <td><?php echo $value['chance']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                    } ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>