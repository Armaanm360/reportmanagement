@extends('admin.master')
@section('content')
<!doctype html>

  <style>
      .form-1-new h3 {
    text-align: center;
}
.user-information,
.twonddataform,
.form-1-new{
    margin-top: 50px;
    margin-bottom: 50px;
}
.user-information {
    display: flex;
    justify-content: space-between;
}
  </style>
  <body>
      <div class="content">
           <div class="page-inner">
        <div class="user-information">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Setting</h5>
                  <p class="card-text">Edit Profile</p>
                  <p class="card-text">Edit Password</p>
                  <p class="card-text">manage/Create User</p>
                </div>
              </div>
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">User Information</h5>
                  <p class="card-text">Name: <span class="user-name">Faisal Ahmad</span></p>
                  <p class="card-text">Designation: <span class="user-desig">SPO</span></p>
                  <p class="card-text">Office: <span class="user-office">MoF, FID, Budget</span></p>
                  <p class="card-text">User Type: <span class="user-type">Super Admin</span></p>
                </div>
              </div>
            
        </div>
        <div class="entryform">
            <h3>Menu>1.1. Annual Performance Evaluation</h3>
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="Financial Year">Financial Year:</label>
                    <input type="text" class="form-control" id="Financial Year" placeholder="Financial Year">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Period">Period:</label>
                    <input type="text" class="form-control" id="Period" placeholder="Period">
                  </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="ministry">Ministry/Division/Regulatory/Organization/Office/Branch:</label>
                            <input type="text" class="form-control" id="ministry" placeholder="Ministry/Division/Regulatory/Organization/Office/Branch:">
                        </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="প্রাপক">প্রাপক:</label>
                    <select id="প্রাপক" class="form-control">
                        <option disabled selected>মন্ত্রণালয়/বিভাগ</option>
                        <option value="1">২০১৮-১৯</option>
                        <option value="2">২০১৯-২০</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="word">Word</label><br>
                    <button type="submit" class="btn btn-success">Word</button>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="pdf">PDF:</label><br>
                    <button type="submit" class="btn btn-success">PDF</button>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="সম্পুর্ন প্রতিবেদন দেখুন">সম্পুর্ন প্রতিবেদন দেখুন</label><br>
                    <button type="submit" class="btn btn-success">দেখুন</button>
                  </div>
                </div>
              </form>
        </div>
    <div class="report-1.2 form-1-new">
        <h3>সেকশন-২: মন্ত্রণালয়/বিভাগের বিভিন্ন কার্যক্রমের চূড়ান্ত ফলাফল/প্রভাব (Outcome/Impact) (সেকশন-৩ এর পর পূরণ করুন)</h3>
      <form>
            <div class="form-group col-md-12">
              <label for="">চূড়ান্ত ফলাফল/প্রভাব</label>
              <input type="text" class="form-control" id="" placeholder="চূড়ান্ত ফলাফল/প্রভাব">
            </div>
            <div class="form-group col-md-12">
              <label for="">চূড়ান্ত ফলাফল সূচক</label>
              <input type="text" class="form-control" id="" placeholder="চূড়ান্ত ফলাফল সূচক">
            </div>
            <div class="form-group col-md-12">
              <label for="">একক</label>
              <input type="text" class="form-control" id="" placeholder="একক">
            </div>
            <div class="form-group col-md-12">
              <label for="">ভিত্তি বছর</label>
              <input type="text" class="form-control" id="" placeholder="ভিত্তি বছর">
            </div>
            <div class="form-group col-md-12">
              <label for="">প্রকৃত অর্জন*</label>
              <input type="text" class="form-control" id="" placeholder="প্রকৃত অর্জন*">
            </div>
            <div class="form-group col-md-12">
              <label for="">লক্ষ্যমাত্রা</label>
              <input type="text" class="form-control" id="" placeholder="লক্ষ্যমাত্রা">
            </div>
            <div class="form-group col-md-12">
              <label for="">অর্জন ২০১৭-১৮</label>
              <input type="text" class="form-control" id="" placeholder="অর্জন ২০১৭-১৮">
            </div>
          
          <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
          <button type="submit" class="btn btn-danger">সংশোধন</button>
        </form>
    </div>
    <div class="report-1.2 form-1-new">
        <h3>সেকশন-৩: কৌশলগত উদ্দেশ্য, অগ্রাধিকার, কার্যক্রম, কর্মসম্পাদন সূচক এবং লক্ষ্যমাত্রাসমূহ</h3>
      <form>
            <div class="form-group col-md-12">
              <label for="">কৌশলগত উদ্দেশ্য</label>
              <input type="text" class="form-control" id="" placeholder="কৌশলগত উদ্দেশ্য">
            </div>
            <div class="form-group col-md-12">
              <label for="">কৌশলগত উদ্দেশ্যের মান</label>
              <input type="text" class="form-control" id="" placeholder="কৌশলগত উদ্দেশ্যের মান">
            </div>
            <div class="form-group col-md-12">
              <label for="">কার্যক্রম</label>
              <input type="text" class="form-control" id="" placeholder="কার্যক্রম">
            </div>
            <div class="form-group col-md-12">
              <label for="">কর্মসম্পাদন সূচক</label>
              <input type="text" class="form-control" id="" placeholder="কর্মসম্পাদন সূচক">
            </div>
            <div class="form-group col-md-12">
              <label for="">একক</label>
              <input type="text" class="form-control" id="" placeholder="একক">
            </div>
            <div class="form-group col-md-12">
              <label for="">কর্মসম্পাদন সূচকের মান</label>
              <input type="text" class="form-control" id="" placeholder="কর্মসম্পাদন সূচকের মান">
            </div>
            <div class="form-group col-md-12">
              <label for="">ভিত্তি বছর</label>
              <input type="text" class="form-control" id="" placeholder="ভিত্তি বছর">
            </div>
            <div class="form-group col-md-12">
              <label for="">প্রকৃত অর্জন*</label>
              <input type="text" class="form-control" id="" placeholder="প্রকৃত অর্জন*">
            </div>
            <div class="form-group col-md-12">
              <label for="লক্ষ্যমাত্রা/নির্ণায়ক ২০১৭-১৮">লক্ষ্যমাত্রা/নির্ণায়ক ২০১৭-১৮</label>
              <select id="লক্ষ্যমাত্রা/নির্ণায়ক ২০১৭-১৮" class="form-control">
                <option disabled selected>বাছাই করুন</option>
                      <option value="1">অসাধারণ</option>
                      <option value="2">অতি উত্তম</option>
                      <option value="3">উত্তম</option>
                      <option value="4">চলতি মান</option>
                      <option value="5">চলতি মানের নিম্নে</option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label for="">অর্জন ২০১৭-১৮</label>
              <input type="text" class="form-control" id="" placeholder="অর্জন ২০১৭-১৮">
            </div>
          
          <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
          <button type="submit" class="btn btn-danger">সংশোধন</button>
        </form>
    </div>
      <div class="report-1.2 form-6-new">
          <h3>সংযুক্তি-</h3>
        <form>
              <div class="form-group col-md-4">
                <input type="file" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <input type="file" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <input type="file" class="form-control" id="" placeholder="">
              </div>
            <div class="form-group ending-css">
                
                <button type="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                <button type="submit" class="btn btn-danger">দাখিল করুন</button>
                <button type="submit" class="btn btn-danger">ফেরত পাঠান</button>
                <label for="">কারন</label>
                <input type="text">
            </div>
          </form>
      </div>
      </div>
      </div>
@endsection