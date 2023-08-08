<!-- Modal -->
<div class="modal fade" id="sumulong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="#exampleModalLabel">New Documentation</h5>
        </div>
            <form action="{{route('documentations.store')}}" id="documentation-upload" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <input type="file" class="dropify" name="doc_img" id="doc-img"  post_max_size ="32M" data-max-file-size="32M" data-show-errors="true" data-max-file-size-preview="32M">
                <div>
                <input type="text" class="form-control col-12 mt-2" id="caption" name="caption" value="{{ old('caption') }}" placeholder="Write caption here">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" id="submit-doc" class="btn btn-outline-success btn-sm" value="Save">
              </div>
            </form>
      </div>
    </div>
  </div>
  <!-- End Modal -->