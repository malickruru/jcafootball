<style>
    .timeline{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .timeline ul {
  list-style: none;
  position: relative;
  /* top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); */
  /* padding: 1px 100px; */
  color: #000;
  /* font-size: 13px; */
}
.timeline ul:before {
  content: '';
  width: 1px;
  height: 100%;
  position: absolute;
  border-left: 2px dashed #b71c1c;
  
}
.timeline ul li {
  position: relative;
  margin-left: 30px ;
  /* background-color: rgba(255, 255, 255, 0.2); */
  padding: 14px;
  border-radius: 6px;
  /* width: 250px; */
  box-shadow: 0 0 4px rgba(0, 0, 0, .12), 0 2px 2px rgba(0, 0, 0, .08)
}
.timeline ul li:not(:first-child) {
  margin-top: 60px;
}
.timeline ul li > span {
  /* width: 2px; */
  /* height: 100%; */
  /* background: #fff; */
  left: -30px;
  top: 0;
  position: absolute;
}
 .timeline ul li > span:after {
  content: '';
  width: 8px;
  height: 8px;
  border-radius: 50%;
  border: 2px solid #000;
  position: absolute;
  background: #b71c1c;
  left: -3.5px;
  top: 0;
}
.timeline ul li span:after {
  top: 100%;
}
.timeline ul li > div {
  margin-left: 10px;  
}
.timeline div .title, .timeline div .type {
  font-weight: 600;
  font-size: 12px;
}
.timeline div .info {
  font-weight: 300;
}
.timeline div > div {
  margin-top: 5px;
}
/* .timeline span.number {
  height: 100%;
} */
.timeline span.number span {
  position: absolute;
  font-size: 10px;
  left: -35px;
  font-weight: bold;
}
.timeline span.number span:first-child {
  top: 0;
}
.timeline span.number span:last-child {
  top: 100%;
}
</style>

<div class="timeline">
    <ul>
        @foreach ($palmares as $item)
        <li data-aos="fade-right">
            <div>
              <div class="title">{{$item->coupe}}</div>
              <div class="info">{{ $item->libelle_classement }}</div>
            </div>
            <span class="number">
              <span>{{ $item->annee }}</span>
              {{-- <span>12:00</span> --}}
            </span>
          </li>
        @endforeach
    </ul>
  </div>
