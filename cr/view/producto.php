<?php
if(isset($_SESSION['estado']))
{
?>

<section class="container my-5 py-5">
    <h2>Productos</h2>
</section>
<section class="container">
    <div class="row">
            <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Follow</a>
            </li>
            
        </ul>
                
        <!-- Tab panels -->
        <div class="tab-content card">
            <!--Panel 1-->
            <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                    porro voluptate odit minima.</p>
            </div>
            <!--/.Panel 1-->
            <!--Panel 2-->
            <div class="tab-pane fade" id="panel2" role="tabpanel">
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                    porro voluptate odit minima.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                    porro voluptate odit minima.</p>
            </div>
            <!--/.Panel 2-->
            <!--Panel 3-->
            <div class="tab-pane fade" id="panel3" role="tabpanel">
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
                    reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
                    porro voluptate odit minima.</p>
            </div>
            <!--/.Panel 3-->
        </div>
    </div>
</section>
<?php
}
?>