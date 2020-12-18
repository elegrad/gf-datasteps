<?php
add_action('wp_footer', 'datasteps_styles');
function datasteps_styles() {
?>
<style>
/* Datatables loader */
.gv-datatables-container .dataTables_wrapper .dataTables_processing {
	z-index: 100000 !important;
	padding-top: 22%;
	height: 100vh !important;
	padding-bottom: 35px;
	line-height: 1.5em;
	min-width: 300px;
	width: 100%;
	font-size: 26px;
	color: #fff;
	background: rgba(0,0,0,0.4);
	position: fixed;
	top: 0;
	margin: 0;
	left: 0;
}
table.dataTable.hover tbody tr:hover,
table.dataTable.display tbody tr:hover,
table.dataTable.display tbody tr:hover>.sorting_1, 
table.dataTable.order-column.hover tbody tr:hover>.sorting_1 {
	background: #ffffc9;
}
.gv-diy-view {
	border: 1px solid #eee;
	border-radius: 4px;
	box-shadow: 0 0 15px #eee;
	padding: 10px 15px;
}
.gv-diy-view.gv-diy-single-container {

}
</style>
<?php }
