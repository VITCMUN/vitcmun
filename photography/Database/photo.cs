using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Vitcmun
{
    #region Photo
    public class Photo
    {
        #region Member Variables
        protected string _name;
        protected string _DOB;
        protected string _phone;
        protected string _email;
        protected string _Institute;
        protected string _Experience;
        protected string _WORK_URL;
        protected string _Comments;
        protected string _accomodation;
        #endregion
        #region Constructors
        public Photo() { }
        public Photo(string name, string DOB, string phone, string email, string Institute, string Experience, string WORK_URL, string Comments, string accomodation)
        {
            this._name=name;
            this._DOB=DOB;
            this._phone=phone;
            this._email=email;
            this._Institute=Institute;
            this._Experience=Experience;
            this._WORK_URL=WORK_URL;
            this._Comments=Comments;
            this._accomodation=accomodation;
        }
        #endregion
        #region Public Properties
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string DOB
        {
            get {return _DOB;}
            set {_DOB=value;}
        }
        public virtual string Phone
        {
            get {return _phone;}
            set {_phone=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Institute
        {
            get {return _Institute;}
            set {_Institute=value;}
        }
        public virtual string Experience
        {
            get {return _Experience;}
            set {_Experience=value;}
        }
        public virtual string WORK_URL
        {
            get {return _WORK_URL;}
            set {_WORK_URL=value;}
        }
        public virtual string Comments
        {
            get {return _Comments;}
            set {_Comments=value;}
        }
        public virtual string Accomodation
        {
            get {return _accomodation;}
            set {_accomodation=value;}
        }
        #endregion
    }
    #endregion
}