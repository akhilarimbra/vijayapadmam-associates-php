<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"><b>VIJAYAPADMAM</b> Associates</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right nav-pills">
       <span class="icon-bar"></span>
       <li><a href="income.php">My Income</a></li>
       <li><a href="updateinfo.php">Update Charge</a></li>
       <li><a href="workshopbill.php">Expense</a></li>
       <li><a href="getbill.php">Report</a></li>
       <li role="presentation" class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Add Report <span class="caret"></span>
         </a>
        <ul class="dropdown-menu" role="menu">
           <li><a href="report.php?id=emp">Employee</a></li>
           <li><a href="report.php?id=client">Client</a></li>
           <li><a href="report.php?id=vehicle">Expense</a></li>
           <li><a href="report.php?id=route">Route</a></li>
         </ul>
       </li>
       <li><a href='delete.php'>Delete</a></li>
       <li role="presentation" class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">View <span class="caret"></span>
         </a>
        <ul class="dropdown-menu" role="menu">
           <li><a href="view.php?id=emp">Employee List</a></li>
           <li><a href="view.php?id=client">Client List</a></li>
           <li><a href="view.php?id=vehicle">Vehicle List</a></li>
           <li><a href="view.php?id=workshop">Expense Type List</a></li>           
           <li><a href="view.php?id=work">Work/Route List</a></li>
           <li><a href="view.php?id=company">Company List</a></li>
           <li><a href="view.php?id=distributor">Distributor List</a></li>
         </ul>
       </li>
       <li role="presentation" class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Edit <span class="caret"></span>
         </a>
        <ul class="dropdown-menu" role="menu">
           <li><a href="edit.php?id=emp">Employee</a></li>
           <li><a href="edit.php?id=client">Client</a></li>
           <li><a href="edit.php?id=vehicle">Vehicle</a></li>
           <li><a href="edit.php?id=workshop">Expense Type</a></li>           
           <li><a href="edit.php?id=work">Work/Route</a></li>
           <li><a href="edit.php?id=distributor">Distributor</a></li>
         </ul>
       </li>
       <li role="presentation" class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">New <span class="caret"></span>
         </a>
        <ul class="dropdown-menu" role="menu">
           <li><a href="new.php?id=emp">Employee</a></li>
           <li><a href="new.php?id=client">Client</a></li>
           <li><a href="new.php?id=vehicle">Vehicle</a></li>
           <li><a href="new.php?id=workshop">Expense</a></li>
           <li><a href="new.php?id=work">Route/Work</a></li>
           <li><a href="new.php?id=company">Company</a></li>
           <li><a href="new.php?id=distributor">Distributor</a></li>
         </ul>
       </li>
       <li><a href="logout.php">Logout</a></li>
     </ul>
   </div>
   </div>
</nav>
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav navbar-left">
        <li><a style="color:black;"><b> © <?php echo date("Y");?>. All Rights Reserved</b></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.ptcorner.in" target="_blank" style="color:black;"><b>Developed by PT Corner</b></a></li>
      </ul>
    </div>
  </div>
</nav>