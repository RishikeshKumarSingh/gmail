<div class="modal fade" id="compose">
        <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">Send Mail </div>
                        <div class="modal-body">
                                <form action="index.php" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                                <div class="form-floating">
                                                        <input type="text" name="to" placeholder="to" class="form-control">
                                                        <label for="">To.</label>
                                                </div>
                                        </div>
                                        <div class="mb-3">
                                                <div class="form-floating">
                                                        <input type="text" name="subject" placeholder="subject" class="form-control">
                                                        <label for="">Subject</label>
                                                </div>
                                        </div>
                                        <div class="mb-3">
                                                <div class="">
                                                        <label for="">Attachment</label>
                                                        <input type="file" name="attachment" placeholder="attachment" class="form-control">
                                                </div>
                                        </div>
                                        <div class="mb-3">
                                                <div class="">
                                                        <textarea name="content" id="" cols="" rows="10" placeholder="write content" class="form-control"></textarea>
                                                </div>
                                        </div>
                                        <div class="mb-3">
                                                <input type="submit" value="Save" name="save" class="btn btn-primary">
                                                <input type="submit" value="Send" name="send" class="btn btn-success float-end">
                                        </div>
                                </form>
                        </div>
                </div>
        </div>
</div>