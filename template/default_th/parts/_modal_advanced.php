<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2020-01-02 20:33
 * @File name           : _modal_advanced.php
 */

?>

<div class="modal fade" id="adv-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" action="index.php" method="get">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ค้นหาอย่างละเอียด</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-titles">ชื่อหนังสือ</label>
                            <input type="text" name="title" class="form-control" id="adv-titles"
                                   placeholder="พิมพ์ชื่อหนังสือที่ต้องการค้นหา">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-author">ผู้แต่ง</label>
                            <input type="text" name="author" class="form-control" id="adv-author"
                                   placeholder="พิมพ์ชื่อผู้แต่งที่ต้องการค้นหา">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-subject">หมวดหมู่(s)</label>
                            <input type="text" name="subject" class="form-control" id="adv-subject"
                                   placeholder="พิมพ์หมวดหมู่ที่ต้องการค้นหา">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-isbn">ISBN/ISSN</label>
                            <input type="text" name="isbn" class="form-control" id="adv-isbn"
                                   placeholder="พิมพ์เลข ISBN/ISSN ที่ต้องการค้นหา">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-coll-type">ประเภทคอลเลกชั่น</label>
                            <select name="colltype" class="form-control"
                                    id="adv-coll-type"><?php echo $colltype_list; ?></select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-location">สถานที่จัดเก็บ</label>
                            <select id="adv-location" name="location"
                                    class="form-control"> <?php echo $location_list; ?></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-gmd">ประเภทของสื่อโสตทัศนวัสดุ</label>
                            <select id="adv-gmd" name="gmd" class="form-control"><?php echo $gmd_list; ?></select>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="search" value="search" class="btn btn-primary">ค้นหา</button>
            </div>
        </form>
    </div>
</div>
