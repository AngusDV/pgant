/*
 Copyright (c) 2012-2018 Open Lab
 Written by Roberto Bicchierai and Silvia Chelazzi http://roberto.open-lab.com
 Permission is hereby granted, free of charge, to any person obtaining
 a copy of this software and associated documentation files (the
 "Software"), to deal in the Software without restriction, including
 without limitation the rights to use, copy, modify, merge, publish,
 distribute, sublicense, and/or sell copies of the Software, and to
 permit persons to whom the Software is furnished to do so, subject to
 the following conditions:

 The above copyright notice and this permission notice shall be
 included in all copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

*/

  Ganttalendar.prototype.initZoomlevels = function () {
  //console.debug("Ganttalendar.prototype.initZoomlevels");

  var self = this;

  // define the zoom level arrays 
  this.zoomLevels = [];
  this.zoomDrawers = {};


  function _addZoom(zoom,zoomDrawer){
    self.zoomLevels.push(zoom);
    self.zoomDrawers[zoom] = zoomDrawer;

    //compute the scale
    self.zoomDrawers[zoom].computedScaleX=600/millisFromString(zoom);
  }


  //-----------------------------  3 DAYS  600px-----------------------------
  _addZoom("3d", {
    adjustDates: function (start, end) {
      start.setFirstDayOfThisWeek();
      end.setFirstDayOfThisWeek();
      end.setDate(end.getDate() + 6);
    },
    row1:        function (date, ctxHead) {
      var start = new Date(date.getTime());
      date.setDate(date.getDate() + 6);
        startme= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa'); // 1392/6/31 23:59:59
        endme=moment(date.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa'); // 1392/6/31 23:59:59
      self.createHeadCell(1,this,ctxHead,startme.format("MMMM d") + " - " + endme.format("MMMM d YYYY")+ " ("+startme.format("w")+")",7,"", start,date);
      date.setDate(date.getDate() + 1);
    },
    row2:        function (date, ctxHead, ctxBody) {
      var start = new Date(date.getTime());
      date.setDate(date.getDate() + 1);
        var holyClass='';
        mm= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa'); // 1392/6/31 23:59:59

        if(mm.format('dd')=='ج' ){
            holyClass="holy";
        }else{
            holyClass="";
        }
      self.createHeadCell(2,this,ctxHead,mm.format("MM d"), 1, "headSmall "+holyClass, start,date);
      self.createBodyCell(this,ctxBody,1, start.getDay() % 7 == (self.master.firstDayOfWeek + 6) % 7, holyClass);
    }
  });



  //-----------------------------  1 WEEK  600px -----------------------------
  _addZoom("1w", {
    adjustDates: function (start, end) {
      //reset day of week
      start.setFirstDayOfThisWeek();
      start.setDate(start.getDate() - 7);
      end.setFirstDayOfThisWeek();
      end.setDate(end.getDate() + 13);
    },
    row1:        function (date, ctxHead) {
      var start = new Date(date.getTime());
      date.setDate(date.getDate() + 6);
        startme= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa'); // 1392/6/31 23:59:59
        endme=moment(date.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa'); // 1392/6/31 23:59:59
      self.createHeadCell(1,this,ctxHead,startme.format("MMM d") + " - " + endme.format("MMM d YYYY")+" (" + "هفته" +endme.format("w")+")", 7,"",start,date);
      date.setDate(date.getDate() + 1);
    },
    row2:        function (date, ctxHead, ctxBody) {
      var start = new Date(date.getTime());
      date.setDate(date.getDate() + 1);
        var holyClass='';
        mm= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa'); // 1392/6/31 23:59:59

        if(mm.format('dd')=='ج' ){
            holyClass="holy";
        }else{
            holyClass="";
        }
      self.createHeadCell(2,this,ctxHead,mm.format('MM')+" ("+mm.format("dd")+")", 1, "headSmall "+holyClass, start,date);
      self.createBodyCell(this,ctxBody,1, start.getDay() % 7 == (self.master.firstDayOfWeek + 6) % 7, holyClass);
    }
  });


  //-----------------------------  2 WEEKS  600px -----------------------------
  _addZoom( "2w",{
    adjustDates: function (start, end) {
      start.setFirstDayOfThisWeek();
      start.setDate(start.getDate() - 7);
      end.setFirstDayOfThisWeek();
      end.setDate(end.getDate() + 20);
    },
    row1:        function (date, tr1) {
      var start = new Date(date.getTime());
      date.setDate(date.getDate() + 6);
        startme= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa'); // 1392/6/31 23:59:59
        endme=moment(date.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa'); // 1392/6/31 23:59:59
      self.createHeadCell(1,this,tr1,startme.format("MMM D") + " - " + endme.format("MMM D YYYY")+" (" + "هفته"+endme.format("W")+")", 7,"",start,date);
      date.setDate(date.getDate() + 1);
    },
    row2:        function (date, tr2, trBody) {
     var start = new Date(date.getTime());
      date.setDate(date.getDate() + 1);
        var holyClass='';
        mm= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa')
            .format('dd'); // 1392/6/31 23:59:59

        if(mm=='ج' ){
            holyClass="holy";
        }else{
            holyClass="";
        }
      self.createHeadCell(2,this,tr2,mm, 1, "headSmall "+holyClass, start,date);
      self.createBodyCell(this,trBody,1, start.getDay() % 7 == (self.master.firstDayOfWeek + 6) % 7, holyClass);
    }
  });


  //-----------------------------  1 MONTH  600px  -----------------------------
  _addZoom( "1M",{
    adjustDates: function (start, end) {
      start.setMonth(start.getMonth()-1);
      start.setDate(15);
      end.setDate(1);
      end.setMonth(end.getMonth() + 1);
      end.setDate(end.getDate() + 14);
    },
    row1:        function (date, tr1) {
      var start = new Date(date.getTime());
      date.setDate(1);
      date.setMonth(date.getMonth() + 1);
      date.setDate(date.getDate() - 1);
      var inc=date.getDate()-start.getDate();
      date.setDate(date.getDate() + 1);

        m= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa')
            .format('YYYY-MMMM'); // 1392/6/31 23:59:59
       // alert(inc);
       month=moment(start.format("yyyy-MM-dd"), 'YYYY-M-D').locale('fa').endOf('month').format('D'); // 1392/6/31 23:59:59
      if(inc>25)
      {

        if(month==29){inc=parseInt(month)+1;}else{inc=month;}


      }else
        {

            first= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
                .locale('fa')
                .format('D'); // 1392/6/31 23:59:59

           inc=month-first+1;

        }
      self.createHeadCell(1,this,tr1,m, inc,"",start,date); //spans mumber of dayn in the month
    },
    row2:        function (date, tr2, trBody) {
      var start = new Date(date.getTime());
      date.setDate(date.getDate() + 1);
        var holyClass='';
        mm= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa')
            .format('dd'); // 1392/6/31 23:59:59

        if(mm=='ج' ){
            holyClass="holy";
        }else{
            holyClass="";
        }


        m= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa')
            .format('D'); // 1392/6/31 23:59:59
      self.createHeadCell(2,this,tr2,m, 1, "headSmall "+holyClass, start,date);
      var nd = new Date(start.getTime());
      nd.setDate(start.getDate() + 1);
      self.createBodyCell(this,trBody,1, nd.getDate() == 1, holyClass);
    }
  });



    //-----------------------------  1 QUARTERS   -----------------------------
    _addZoom( "1Q", {
      adjustDates: function (start, end) {
        start.setDate(1);
        start.setMonth(Math.floor(start.getMonth() / 3) * 3 -1 );
        end.setDate(1);
        end.setMonth(Math.floor(end.getMonth() / 3) * 3 + 4);
        end.setDate(end.getDate() - 1);
      },
      row1:        function (date, tr1) {
        var start = new Date(date.getTime());
        date.setMonth(Math.floor(date.getMonth() / 3) * 3 + 3);
        var inc=(date.getMonth()-start.getMonth());
        m= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
              .locale('fa')
              .format('YYYY'); // 1392/6/31 23:59:59
          mo= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
              .locale('fa')
              .format('M'); // 1392/6/31 23:59:59
        var q = (Math.floor(mo / 3) + 1);
        if(inc==-9){
          inc=3;
        }
          switch(q)
          {
              case 1:
                q="اول";
                break;
              case 2:
                  q="دوم";
                  break;
              case 3:
                  q="سوم";
                  break;
              case 4:
                  q="چهارم";
                  break;

          }
        self.createHeadCell(1,this,tr1,"سه ماه"+" "+q+"  سال "+m, inc,"",start,date);
      },
      row2:        function (date, tr2, trBody) {
        var start = new Date(date.getTime());
        date.setMonth(date.getMonth() + 1);
          m= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
              .locale('fa')
              .format('MMMM');
        self.createHeadCell(2,this,tr2,m, 1, "headSmall", start,date);
        self.createBodyCell(this,trBody,1, start.getMonth() % 3 == 2);
      }
    });


    //-----------------------------  2 QUARTERS   -----------------------------
  _addZoom( "2Q", {
    adjustDates: function (start, end) {
      start.setDate(1);
      start.setMonth(Math.floor(start.getMonth() / 3) * 3 -3);
      end.setDate(1);
      end.setMonth(Math.floor(end.getMonth() / 3) * 3 + 6);
      end.setDate(end.getDate() - 1);
    },
    row1:        function (date, tr1) {
      var start = new Date(date.getTime());
      date.setMonth(date.getMonth() + 3);
        m= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa')
            .format('YYYY'); // 1392/6/31 23:59:59
        mo= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa')
            .format('M'); // 1392/6/31 23:59:59
      var q = (Math.floor(mo / 3) + 1);

        switch(q)
        {
            case 1:
                q="اول";
                break;
            case 2:
                q="دوم";
                break;
            case 3:
                q="سوم";
                break;
            case 4:
                q="چهارم";
                break;

        }
        self.createHeadCell(1,this,tr1,"سه ماه"+" "+q+"  سال "+m, 3,"",start,date);
    },
    row2:        function (date, tr2, trBody) {
      var start = new Date(date.getTime());
      date.setMonth(date.getMonth() + 1);
        m= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa')
            .format('MMMM');
      var lbl = m;
      self.createHeadCell(2,this,tr2,lbl, 1, "headSmall", start,date);
      self.createBodyCell(this,trBody,1, start.getMonth() % 3 == 2);
    }
  });


  //-----------------------------  1 YEAR  -----------------------------
  _addZoom( "1y", {
    adjustDates: function (start, end) {
      start.setDate(1);
      start.setMonth(Math.floor(start.getMonth() / 6) * 6 -6);
      end.setDate(1);
      end.setMonth(Math.floor(end.getMonth() / 6) * 6 + 12);
      end.setDate(end.getDate() - 1);
    },
    row1:        function (date, tr1) {
      var start = new Date(date.getTime());
      date.setMonth(date.getMonth() + 6);
      var sem = (Math.floor(start.getMonth() / 6) + 1);
	    m= moment(start.format("yyyy"), 'YYYY-M-D')
            .locale('fa')
            .format('YYYY'); // 1392/6/31 23:59:59
      self.createHeadCell(1,this,tr1,"نیمسال"+" "+sem+"-"+m , 6,"",start,date);
    },
    row2:        function (date, tr2, trBody) {
      var start = new Date(date.getTime());
      date.setMonth(date.getMonth() + 1);
	  m= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa')
            .format('MMM');
      self.createHeadCell(2,this,tr2,m, 1, "headSmall", start,date);
      self.createBodyCell(this,trBody,1, (start.getMonth() + 1) % 6 == 0);
    }
  });


  //-----------------------------  2 YEAR -----------------------------
  _addZoom( "2y", {
    adjustDates: function (start, end) {
      start.setDate(1);
      start.setMonth(-6);
      end.setDate(30);
      end.setMonth(17);
    },
    row1:        function (date, tr1) {
      var start = new Date(date.getTime());
      var inc=12-start.getMonth();
      date.setMonth(date.getMonth() + inc);
	   m= moment(start.format("yyyy-MM-dd"), 'YYYY-M-D')
            .locale('fa')
            .format('YYYY');
      self.createHeadCell(1,this,tr1,m, inc/6,"",start,date);
    },
    row2:        function (date, tr2, trBody) {
      var start = new Date(date.getTime());
      date.setMonth(date.getMonth() + 6);
      var sem = (Math.floor(start.getMonth() / 6) + 1);
      self.createHeadCell(2,this,tr2,"نیمسال" +" "+ sem, 1, "headSmall", start,date);
      self.createBodyCell(this,trBody,1, sem == 2);
    }
  });



};

