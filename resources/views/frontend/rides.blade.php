@extends('frontend.layouts.main')
@section('content')
	<main class="main" role="main">
		<div class="wrap">
			<div class="row" style="margin-top:100px;">
				<div class="col-md-12">
					<!-- form start -->
					<header class="f-title color">Rides List</header>
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Booking Id</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Route</th>
                                <th>Status</th>
                                <th>Fare</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for ($x = 0; $x <= 20; $x++) { ?>
                            <tr>
                                <td><?php echo "$x";?></td>
                                <td>2011/04/<?php echo "$x";?></td>
                                <td>Time<?php echo "$x";?></td>
                                <td>Route<?php echo "$x";?></td>
                                <td>Active</td>
                                <td>$320,80<?php echo "$x";?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Booking Id</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Route</th>
                                <th>Status</th>
                                <th>Fare</th>
                            </tr>
                        </tfoot>
                    </table>
				</div>
			</div>
		</div>
	</main>
@endsection