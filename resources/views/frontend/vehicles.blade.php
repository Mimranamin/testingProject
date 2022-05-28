@extends('frontend.layouts.main')
@section('content')
	<main class="main" role="main">
		<div class="wrap">
			<div class="row" style="margin-top:100px;">
				<div class="col-md-12">
					<!-- form start -->
					<header class="f-title color">Vehicles List</header>
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Vehicle Id</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Color</th>
                                <th>Number</th>
                                <th>Category</th>
                                <th>Documnets</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php for ($x = 0; $x <= 20; $x++) { ?>
                            <tr>
                                <td><?php echo "$x";?></td>
                                <td>200<?php echo "$x";?></td>
                                <td>199<?php echo "$x";?></td>
                                <td>Color<?php echo "$x";?></td>
                                <td>Number<?php echo "$x";?></td>
                                <td>Category<?php echo "$x";?></td>
                                <td>Documnents<?php echo "$x";?></td>
                                <td>Active<?php echo "$x";?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Vehicle Id</th>
                                <th>Make</th>
                                <th>Model</th>
                                <th>Color</th>
                                <th>Number</th>
                                <th>Category</th>
                                <th>Documnets</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
				</div>
			</div>
		</div>
	</main>
@endsection