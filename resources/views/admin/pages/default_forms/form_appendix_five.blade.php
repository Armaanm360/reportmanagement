@extends('admin.master')
@section('content')
<style>
    * {
        list-style-type: none;
    }

    .item input {
        border: none;
        width: 100%;
        text-align: inherit;
    }

</style>

<div class="content">

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">{{__('Form')}}</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('Form')}}</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">{{__('')}}</a>
                </li>
            </ul>
        </div>



       <form action="{{ url('appendix_five') }}" method="post">
        @csrf
              <div class="mt-4 item">
                <div class="header-item">
                    <div style="text-align: right;">
                      <h4>পরিশিষ্ট-৫</h4>
                    </div>
                    <div>
                      <h6>বিষয়</h6>
                    </div>
                  </div>
                  <div class="listed-content">
                    <ul>
                      <li><input type="text" name="budget_sub9[]" id="" value="৯। বাজেট বাস্তবায়ন অগ্রগতি বিষয়ক প্রতিবেদন প্রণয়নের জন্য বাজেটে ঘোষিত গুরুত্বপূর্ণ কার্যক্রম/কর্মসূচির বাস্তবায়ন অগ্রগতি প্রতিবেদন। (ত্রৈমাসিক/ষান্মাষিক/বাৎসরিক)"></li>
                    </ul>
                  </div>
                  <div class="mt-4 item-table">
                    <h6 align="center">
                        <input type="text" name="budget_sub2009[]" id="" value=" ২০০৯-১০ হতে ২০১৯-২০ অর্থবছরে বাজেট বক্তৃতায় ঘোষিত গুরুত্বপূর্ণ কার্যক্রমসমূহ বাস্তবায়ন অগ্রগতির  ১ম প্রান্তিক (জুলাই-সেপ্টেম্বর ২০১৯) প্রতিবেদন">
                       </h6>
                      <h6 align="center">
                          <input type="text" name="budget_sub8[]" id="" value="৮. আতর্ টক প্রতিষ্ঠান তবভাগ, অর্ ট মন্ত্রর্ালয়">
                       </h6>
                      <table border="1">
                        <thead>
                          <tr>
                              <td>অর্থবছর</td>
                              <td>বাজেটে ঘোষিত কার্যক্রম/পরিকল্পনা</td>
                              <td>বাস্তবায়ন অগ্রগতি ২০১৯-২০ (১ম প্রান্তিক)</td>
                              <td>বাস্তবায়নকারী</td>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <input type="hidden" name="row_id" value="1">
                              <td><input type="text" name="fiscal_year_1" id="" value=""></td>
                              <td><input type="text" name="activity_1" id="" value=""></td>
                              <td><input type="text" name="improvement_1" id="" value=""></td>
                              <td><input type="text" name="implemented_1" id="" value=""></td>
                          </tr>
                      </tbody>
                      </table>
                  </div>
              </div>
              <div class="mt-4 mb-4 input-final">
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
              <button type="submit" class="btn btn-danger">সংশোধন</button>
              </div>
          </form>


        @endsection
