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
                <h5 class="modal-title" id="exampleModalLabel"><?php echo __('Advanced Search'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-titles"><?php echo __('Title'); ?></label>
                            <input type="text" name="title" class="form-control" id="adv-titles"
                                   placeholder="<?php echo __('Enter title'); ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-author"><?php echo __('Author(s)'); ?></label>
                            <input type="text" name="author" class="form-control" id="adv-author"
                                   placeholder="<?php echo __('Enter author(s) name'); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-subject"><?php echo __('Subject(s)'); ?></label>
                            <input type="text" name="subject" class="form-control" id="adv-subject"
                                   placeholder="<?php echo __('Enter subject'); ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-isbn"><?php echo __('ISBN/ISSN'); ?></label>
                            <input type="text" name="isbn" class="form-control" id="adv-isbn"
                                   placeholder="<?php echo __('Enter ISBN/ISSN'); ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-coll-type"><?php echo __('Collection Type'); ?></label>
                            <select name="colltype" class="form-control"
                                    id="adv-coll-type"><?php echo $colltype_list; ?></select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-location"><?php echo __('Location'); ?></label>
                            <select id="adv-location" name="location"
                                    class="form-control"> <?php echo $location_list; ?></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="adv-gmd"><?php echo __('GMD'); ?></label>
                            <select id="adv-gmd" name="gmd" class="form-control"><?php echo $gmd_list; ?></select>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="search" value="search" class="btn btn-primary"><?php echo __('Find Collection'); ?></button>
            </div>
        </form>
    </div>
</div>
