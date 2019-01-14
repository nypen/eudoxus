<?xml version="1.0" encoding="utf-8" ?>
<hibernate-mapping xmlns="urn:nhibernate-mapping-2.2" namespace="Eudoxus" assembly="Eudoxus">
    <class name="Users" table="Users">
        <id name="IdUsers" type="Int32" unsaved-value="0">
            <column name="idUsers" sql-type="int" not-null="true" unique="true" index="PRIMARY"/>
            <generator class="native" />
        </id>
        <property name="UserNickname" type="Unknown">
            <column name="userNickname" sql-type="tinytext" not-null="true" />
        </property>
        <property name="UserFirstName" type="Unknown">
            <column name="userFirstName" sql-type="tinytext" not-null="true" />
        </property>
        <property name="UserLastName" type="Unknown">
            <column name="userLastName" sql-type="tinytext" not-null="true" />
        </property>
        <property name="EmailUsers" type="Unknown">
            <column name="emailUsers" sql-type="tinytext" not-null="true" />
        </property>
        <property name="Created" type="DateTime">
            <column name="created" sql-type="datetime" not-null="true" />
        </property>
        <property name="Modified" type="DateTime">
            <column name="modified" sql-type="datetime" not-null="true" />
        </property>
        <property name="Status" type="Unknown">
            <column name="status" sql-type="enum" not-null="false" />
        </property>
        <property name="PwdUsers" type="String">
            <column name="pwdUsers" sql-type="longtext" not-null="true" />
        </property>
        <property name="Forgot_pass_identity" type="String">
            <column name="forgot_pass_identity" sql-type="varchar" not-null="true" />
        </property>
        <property name="UsersCategory" type="Unknown">
            <column name="usersCategory" sql-type="tinytext" not-null="true" />
        </property>
        <property name="StudentsAM" type="Int32">
            <column name="StudentsAM" sql-type="int" not-null="false" />
        </property>
        <property name="StudentsInst" type="Unknown">
            <column name="StudentsInst" sql-type="tinytext" not-null="false" />
        </property>
        <property name="StudentsDepart" type="Unknown">
            <column name="StudentsDepart" sql-type="tinytext" not-null="false" />
        </property>
        <property name="StudentsYear" type="Int32">
            <column name="StudentsYear" sql-type="int" not-null="false" />
        </property>
    </class>
</hibernate-mapping>