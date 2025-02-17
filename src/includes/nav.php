<?php
$pages = array(
    'Authoring' => array(
        'authoring/index.php' => 'Author'
    ),
    'Assessment' => array(
        'assessment/index.php' => 'Assessments'
    ),
    'Analytics' => array(
        'analytics/index.php' => 'Analytics'
    ),
    'Use Cases' => array(
        'usecases/index.php' => 'Use Cases'
    )
);
?>

    <div class="navbar" role="navigation">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-main">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="<?php echo $baseWebPath; ?>" class="logo">
            <img src="/static/images/lrn-demos-logo-2x.png" alt="Learnosity Demos" class="logo">
        </a>
    </div>
    <div class="navbar-collapse collapse" id="nav-main">
    <ul class="nav navbar-nav">
        <?php
        foreach ($pages as $page => $name) {
            if (sizeof($name) > 1) {
                echo '
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle bottom-chevron" data-toggle="dropdown">' . $page . '</a>
                                    <ul class="dropdown-menu">';
                foreach ($name as $subpage => $subname) {
                    echo '<li><a href="' . $env['www'] . $subpage . '" class="">' . $subname . '</a></li>' . PHP_EOL;
                }
                echo '
                                    </ul>
                                </li>' . PHP_EOL;
            } else {
                foreach ($name as $key => $value) {
                    echo '<li class="dropdown"><a href="' . $env['www'] . $key . '" class="">' . $value . '</a><li>';
                }
            }
        }
        ?>
    </ul>
    <div class="nav-sec-wrapper">
        <ul class="nav navbar-nav nav-sec">
            <li>
                <a href="https://github.com/Learnosity/learnosity-demos/blob/master/www<?php echo $_SERVER['REQUEST_URI']?>" class="view_source">
                                    </span>View source</span>
                                </a>
                            </li>
                        </ul>
                    </div>

        </div >
    </div >
</div >
