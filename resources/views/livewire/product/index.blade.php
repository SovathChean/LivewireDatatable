<!-- Row -->
<div class="row">
  <!-- Datatables -->
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="table-auto p-3">
      <a href="{{route('product.add')}}">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
            Add Product
        </button>
        </a>
        <livewire:product-table />
      </div>
    </div>
  </div>
</div>

