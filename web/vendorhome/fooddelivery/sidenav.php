
<div class="sidebar" data-color="cyan" data-image="assets/img/test.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
<div class="sidebar-wrapper">
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");?> 
            <div class="logo">
                <a href="#" class="simple-text">
                    Service Provider
                </a>
				<div id="para1" class="text-center" >
				
				</div>
				<script>
				
				
document.getElementById("para1").innerHTML = formatAMPM();

function formatAMPM() {
var d = new Date(),
    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    ampm = d.getHours() >= 12 ? 'pm' : 'am',
    months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
return days[d.getDay()]+'  '+d.getDate()+' '+months[d.getMonth()]+' '+d.getFullYear()+' '+hours+':'+minutes+ampm;
}
</script>
            </div>
			
			

            <ul class="nav">
			
                <li class="<?= ($activePage == 'orderlist') ? 'active':''; ?>">
                    <a href="Orderlist.php">
                        <i class="pe-7s-graph"></i>
                        <p>Order list</p>
                    </a>
                </li>
				
				<li class="<?= ($activePage == 'profile') ? 'active':''; ?>">
                    <a href="profile.php">
                        <i class="pe-7s-user"></i>
                        <p>My Profile</p>
                    </a>
                </li>
				
				 <li class="<?= ($activePage == 'addcategory') ? 'active':''; ?>">
                    <a href="addcategory.php">
                        <i class="pe-7s-note2"></i>
                        <p>Add Category</p>
                    </a>
                </li>
				
				<li class="<?= ($activePage == 'additem') ? 'active':''; ?>">
                    <a href="additem.php">
                        <i class="pe-7s-note2"></i>
                        <p>Add Items</p>
                    </a>
                </li>
				
				 <li class="<?= ($activePage == 'growthchild') ? 'active':''; ?>">
                    <a href="itemlist.php">
                        <i class="pe-7s-graph2"></i>
                        <p>Item List</p>
                    </a>
                </li>
				
				
				
				
				
					
             
				
            </ul>
    	</div>
		</div>