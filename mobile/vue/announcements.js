var togglePost = new Vue({
    el: '#toggle-announcements',
    data: {
        creator_pic: '',
        creator_name: '',
        agency: '',
        time: '',
        desc: '',
        images: []
    }
});

var post = new Vue({
    el: '#announcements', 
    data: {
      image2: '',
      image3: '',
      imageList: '',
      imageListPlus: '',
      imageColor: 'blur-image',
      announcements: [
          {
            imageUrl: [
                {
                    url: 'assets/img/logo_1s.png'
                }, 
                {
                    url: 'assets/img/marc.jpg'
                }, 
                {
                    url: 'assets/img/logo_1s.png'
                }
            ],
            creator_pic: 'assets/img/avatar.jpg',
            creator_name: 'Alvin Laroya',
            creator_id: '14242224',
            agencyId: 1, 
            agency: 'Bureau of Fire Protection ng potangina hahaha Agoo, La Union', 
            time: '4:45pm', 
            desc: 'I found a love for me darling just dive right in follow my lead, I found a girl beautiful and sweet and I never knew you are that'
        },{
            imageUrl: [
                {
                    url: 'assets/img/cover.jpg'
                }, 
                {
                    url: 'assets/img/marc.jpg'
                }, 
                {
                    url: 'assets/img/city-profile.jpg'
                }
            ],
            creator_pic: 'assets/img/avatar2.jpg',
            creator_name: 'Jonathan Lagao',
            agencyId: 1, 
            agency: 'PNP Agoo, La Union', 
            time: '4:45pm', 
            desc: 'Falling out falling in nothings sure in this world'
        },
        {
            imageUrl: [
                {
                    url: 'assets/img/cover.jpg'
                }, 
                {
                    url: 'assets/img/marc.jpg'
                }, 
                {
                    url: 'assets/img/city-profile.jpg'
                },
                {
                    url: 'assets/img/sidebar-1.jpg'
                }
            ],
            creator_pic: 'assets/img/avatar3.jpg',
            creator_name: 'Whilmer Realigue',
            agencyId: 1, 
            agency: 'LUMC Agoo, La Union', 
            time: '4:45pm', 
            desc: 'You and I, we like fireworks'
        },
        {
            imageUrl: [
                {
                    url: 'assets/img/cover.jpg'
                }, 
                {
                    url: 'assets/img/marc.jpg'
                }, 
                {
                    url: 'assets/img/city-profile.jpg'
                }
            ],
            creator_pic: 'assets/img/marc.jpg',
            creator_name: 'Marc Anthony Ferrer',
            agencyId: 1, 
            agency: 'PNP Caba, La Union', 
            time: '4:45pm', 
            desc: 'She is the sweetest thing that I know'
        }
      ],
      messages: 'gawgawgwag',
      srcs: []
    },
    mounted(){
     /*   this.srcs = this.announcements; */
       this.imageList = 4; /* this.srcs.length; */
    /*    this.image1 = this.srcs; */
       //console.log(this.announcements.imageUrl[0].src)
       //this.image2 = this.announcement.imageUrl[0].url;
       //this.image3 = this.srcs[2].src;
       this.imageList <= 3 ? this.imageListPlus = '' : [this.imageListPlus = this.imageList - 3 + '+', this.imageColor = 'blur-image'];
    },
    methods: {
        showMoreResults(add_value){
            this.alertLimit += add_value;
            /* this.alertLimit += add_value;
            console.log(this.alertLimit); */
        },
        openAnnouncements(creator_pic, creator_name, agency, time, desc, image){
            togglePost.creator_pic = creator_pic;
            togglePost.creator_name = creator_name;
            togglePost.agency = agency;
            togglePost.time = time;
            togglePost.desc = desc;
            togglePost.images = image;

            console.log(togglePost.creator_pic)
        }
    }
    /* mounted(){
      axios.get('http://localhost/mobalert/examples/controller/view_inspection.php').then(response => {
        this.bfpInspections = response.data.html
        console.log(this.bfpInspections)
      })  
    }, */
});