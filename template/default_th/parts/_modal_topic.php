<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2020-01-02 16:27
 * @File name           : _modal_topic.php
 */

?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เลือกหัวข้อที่คุณสนใจ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="topic d-flex flex-wrap justify-content-center p-0">
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=0&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/0-chemical.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <!-- Computer science, information & general works -->
                            วิทยาการคอมพิวเตอร์ สารสนเทศ และงานทั่วไป
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=1&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/1-memory.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <!-- Philosophy & psychology -->
                            ปรัชญาและจิตวิทยา
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=2&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/2-mosque.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <!-- Religion -->
                            ศาสนา
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=3&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/3-diploma.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <!-- Social sciences -->
                            สังคมศาสตร์
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=4&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/4-translation.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?php echo __('Language'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=5&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/5-math.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?php echo __('Pure Science'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=6&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/6-blackboard.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?php echo __('Applied sciences'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=7&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/7-quill.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <!-- Arts & recreation -->
                            <?php echo __('Arts & recreation'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=8&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/8-books.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?php echo __('Literature'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=9&search=search" class="d-flex flex-column">
                            <img src="<?php echo assets('images/9-return-to-the-past.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?php echo __('History & geography'); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
