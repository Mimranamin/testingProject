@extends('frontend.layouts.main')
@section('content')
	<main class="main" role="main">
		<div class="wrap">
			<div class="row" style="margin-top:100px;">
				<div class="col-md-12">
					<!-- form start -->
					<header class="f-title color">Tax Reports</header>
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>No. of Rides</th>
                                <th>Total Value</th>
                                <th>Tax Value</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php for ($x = 0; $x <= 20; $x++) { ?>
                            <tr>
                                <td>200<?php echo "$x";?></td>
                                <td>22<?php echo "$x";?></td>
                                <td>999<?php echo "$x";?></td>
                                <td>212<?php echo "$x";?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Year</th>
                                <th>No. of Rides</th>
                                <th>Total Value</th>
                                <th>Tax Value</th>
                            </tr>
                        </tfoot>
                    </table>
				</div>
			</div>
		</div>
	</main>
@endsection