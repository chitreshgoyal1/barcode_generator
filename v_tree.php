<?php 

$link = mysqli_connect('localhost','root','admin');
mysqli_select_db($link,'menu');
//get all rows

$query = mysqli_query($link,'SELECT * FROM menu_link');

while ( $row = mysqli_fetch_assoc($query) )
{
        $menu_array[$row['id']] = array('name' => $row['name'],'parent_id' => $row['parent_id']);
}

//recursive function that prints categories as a nested html unorderd list

function generate_menu($parent)
{
        $has_childs = false;
        //this prevents printing 'ul' if we don't have subcategories for this category

        global $menu_array;
        //use global array variable instead of a local variable to lower stack memory requierment

        foreach($menu_array as $key => $value)
        {
                if ($value['parent_id'] == $parent) 
                {       
                        //if this is the first child print '<ul>'                       
                        if ($has_childs === false)
                        {
                                //don't print '<ul>' multiple times                             
                                $has_childs = true;
                                echo '<ul id="treemenu1" class="treeview">';
                        }
                        echo '<li><a href="/category/' . $value['name'] . '/">' . $value['name'] . '</a>';
                        generate_menu($key);
                        //call function again to generate nested list for subcategories belonging to this category
                        echo '</li>';
                }
        }

        if ($has_childs === true) echo '</ul>';
}

//generate menu starting with parent categories (that have a 0 parent)
generate_menu(0);
?>



<a href="javascript:ddtreemenu.flatten('treemenu1', 'expand')">Expand All</a> | <a href="javascript:ddtreemenu.flatten('treemenu1', 'contact')">Contact All</a>




<script type="text/javascript">
//ddtreemenu.createTree(treeid, enablepersist, opt_persist_in_days (default is 1))
ddtreemenu.createTree("treemenu1", true)

</script>