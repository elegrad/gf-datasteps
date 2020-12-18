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

/* Datatables Hover */
table.dataTable.hover tbody tr:hover,
table.dataTable.display tbody tr:hover,
table.dataTable.display tbody tr:hover>.sorting_1, 
table.dataTable.order-column.hover tbody tr:hover>.sorting_1 {
	background: #ffffc9;
}

/* Style for the DYI View of Gravity View */
.gv-diy-view {
	border: 1px solid #eee;
	border-radius: 4px;
	box-shadow: 0 0 15px #eee;
	padding: 10px 15px;
}
.gv-diy-view.gv-diy-single-container {

}

/* Gravity Flow Single */
#post-body.columns-2 #postbox-container-1 {
	float: right;
	margin-right: -280px;
	width: 260px;
}
.postbox {
    background: #ceedff;
    min-width: 200px;
    position: relative;
    line-height: 1;
    margin-bottom: 20px;
    padding: 0;
}
.gravityflow-has-sidebar .postbox, 
.gravityflow-has-step-info .postbox, 
.gravityflow-has-workflow-info .postbox {
	border: 1px solid rgb(123 205 243 / 80%);
    box-shadow: 3px 3px 10px rgb(0 0 0 / 20%);
}

/* Style the sidebar */
.gravityflow_workflow_wrap .postbox-container .button {
	display: block;
	width: 100%;
	margin-top: 5px;
	font-weight: bold;
	height: 40px;
	font-size: 12px;
}
.gravityflow_workflow_wrap .postbox-container .button.button-primary {
	background: #007eff;
	color: #fff !important;
	font-size: 14px;
}

/* Hide the emtpy fields checkbox */
#gentry_display_empty_fields,
label[for="gentry_display_empty_fields"] {
	display: none;
}
</style>
<?php }
