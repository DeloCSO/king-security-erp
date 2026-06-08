KING SECURITY ERP

Product Requirements Document (PRD)

Version 1.0

Prepared For: King Security Services

Product Codename: KSS ERP

Base Platform: Invoice Ninja v5

Date: June 2026

1\. Executive Summary

King Security ERP (KSS ERP) is an AI-first Security Workforce Management and Billing Platform built on top

of Invoice Ninja v5.

The platform is designed specifically for private security agencies and contract security service providers.

The objective is to replace fragmented Excel-based processes used for:

• 

• 

• 

• 

• 

• 

Employee Management

Deployment Planning

Attendance Tracking

Payroll Processing

Incident Reporting

Client Billing

with a centralized cloud-based system capable of automating operational and financial workflows.

The system shall leverage existing Invoice Ninja capabilities for CRM, Invoicing, Quotations, Payments,

Documents and Reporting while introducing security-industry-specific modules.

2\. Business Objectives

Primary Objectives

1\. 

2\. 

Reduce manual attendance processing by 80%.

Reduce payroll preparation time by 75%.

1

3\. 

4\. 

5\. 

6\. 

Automate monthly client billing.

Centralize guard records and compliance documents.

Provide real-time deployment visibility.

Create a foundation for AI-powered operational workflows.

Secondary Objectives

1\. 

2\. 

3\. 

4\. 

5\. 

Mobile-first field operations.

QR-based patrol verification.

GPS attendance verification.

Client self-service portal.

Contract intelligence and analytics.

3\. Product Scope

In Scope

• 

• 

• 

• 

• 

• 

• 

• 

• 

• 

Client Management

Site Management

Guard Management

Attendance Management

Deployment Management

Payroll Management

Incident Management

Billing Automation

Reporting

AI Automation

Out of Scope (Version 1)

• 

• 

• 

• 

• 

Biometric Device Integration

Facial Recognition

Drone Surveillance

Vehicle Fleet Management

Visitor Management

2

4\. User Roles

Super Administrator

Permissions:

• 

• 

• 

• 

• 

Full platform access

User management

Company settings

System configuration

Audit logs

Operations Manager

Permissions:

• 

• 

• 

• 

Site management

Deployment management

Attendance oversight

Incident management

HR \& Payroll Officer

Permissions:

• 

• 

• 

• 

• 

Employee records

Salary processing

Advances

Deductions

Payroll reports

Site Supervisor

Permissions:

• 

• 

• 

Attendance entry

Incident reporting

Guard assignment updates

Client User

Permissions:

• 

• 

Attendance viewing

Invoice viewing

3

Incident summary viewing

• 

Read-only access.

5\. Functional Requirements

Module 1: Client Management

Purpose

Manage customer organizations receiving security services.

Core Fields

• 

• 

• 

• 

• 

• 

• 

• 

Client Name

GST Number

Address

Contact Person

Mobile Number

Email Address

Contract Start Date

Contract End Date

Business Rules

• 

• 

• 

One client can have multiple sites.

One site belongs to one client.

Contracts may have multiple billing structures.

Module 2: Site Management

Purpose

Manage physical locations where guards are deployed.

Core Fields

• 

• 

• 

• 

• 

• 

• 

Site Code

Site Name

Client

Address

GPS Coordinates

Shift Structure

Deployment Requirement

4

Business Rules

• 

• 

• 

Site must be linked to a client.

Site may have multiple shifts.

Site may have multiple deployment schedules.

Module 3: Guard Management

Purpose

Maintain employee records.

Personal Information

• 

• 

• 

• 

• 

• 

• 

Employee Code

Full Name

Father Name

Date of Birth

Gender

Address

Phone Number

Employment Information

• 

• 

• 

• 

Joining Date

Designation

Employment Status

Salary Structure

Compliance Information

• 

• 

• 

• 

• 

• 

Aadhaar Number

PAN Number

ESI Number

EPF Number

Bank Account

IFSC Code

Documents

• 

• 

• 

• 

• 

Aadhaar Card

PAN Card

Police Verification

Medical Certificate

Training Certificates

5

Module 4: Deployment Management

Purpose

Assign guards to sites and shifts.

Core Fields

• 

• 

• 

• 

• 

• 

Guard

Site

Shift

Start Date

End Date

Status

Business Rules

• 

• 

• 

A guard may be assigned to multiple sites over time.

Active deployments cannot overlap.

Deployment changes must be audited.

Module 5: Attendance Management

Purpose

Track workforce attendance.

Attendance Statuses

• 

• 

• 

• 

• 

• 

Present

Absent

Leave

Weekly Off

Holiday

Overtime

Core Fields

• 

• 

• 

• 

• 

• 

• 

Date

Guard

Site

Shift

Check-In Time

Check-Out Time

Hours Worked

6

Business Rules

• 

• 

Attendance affects payroll calculations.

Attendance affects client billing calculations.

Module 6: Payroll Management

Purpose

Generate employee salary registers.

Salary Components

• 

• 

• 

• 

• 

• 

• 

Gross Salary

Advance

Other Deductions

ESI

EPF

Professional Tax

Net Salary

Outputs

• 

• 

• 

• 

Salary Register

Bank Transfer Sheet

Advance Register

Deduction Register

Module 7: Uniform \& Asset Management

Purpose

Track issued assets.

Assets

• 

• 

• 

• 

• 

• 

• 

Uniform

Shoes

Cap

Torch

Belt

Raincoat

ID Card

7

Tracking

• 

• 

• 

• 

Issue Date

Return Date

Condition

Replacement History

Module 8: Incident Management

Purpose

Record operational incidents.

Categories

• 

• 

• 

• 

• 

• 

Theft

Fire

Medical Emergency

Trespass

Property Damage

Safety Violation

Core Fields

• 

• 

• 

• 

• 

• 

• 

• 

Incident Number

Site

Guard

Date

Description

Severity

Attachments

Corrective Action

Module 9: Billing Automation

Purpose

Automate client invoice generation.

Billing Inputs

• 

• 

• 

• 

Attendance

Deployment

Contract Rate

Overtime

8

Billing Outputs

• 

• 

• 

Monthly Invoice

Overtime Invoice

Additional Service Charges

Formula

Billable Amount = Man-Days × Contract Rate

6\. AI Features

AI Attendance Import

Input:

Excel Attendance Register

Output:

Attendance records automatically generated.

AI Payroll Assistant

Natural Language Command:

"Generate June Payroll"

Output:

Completed payroll register.

AI Invoice Assistant

Natural Language Command:

"Generate June Invoice for KLE Hospital"

Output:

Invoice draft generated automatically.

9

AI Contract Reader

Input:

Security Services Agreement

Output:

• 

• 

• 

• 

• 

Guard Count

Billing Rates

Overtime Rules

Penalty Clauses

Contract Duration

Automatically extracted.

7\. Reporting Requirements

Operations Reports

• 

• 

• 

• 

Deployment Report

Attendance Report

Site Coverage Report

Incident Report

Payroll Reports

• 

• 

• 

Salary Register

Advance Register

Deduction Register

Client Reports

• 

• 

• 

Attendance Summary

Incident Summary

Invoice Summary

10

8\. Mobile Application Requirements

Guard Mobile App

• 

• 

• 

Attendance

Duty Roster

Incident Reporting

Supervisor Mobile App

• 

• 

• 

Attendance Approval

Incident Review

Deployment Changes

9\. Technical Constraints

Platform

Invoice Ninja v5

Backend

Laravel

Frontend

React

Database

MySQL / MariaDB

API

REST API

Deployment

Docker

11

10\. Success Metrics

• 

• 

• 

• 

• 

80% reduction in Excel usage.

75% reduction in payroll preparation effort.

90% reduction in invoice preparation effort.

100% centralized employee records.

100% audit trail coverage for deployments and attendance.

11\. MVP Release Scope

Release 1.0 shall include:

• 

• 

• 

• 

• 

• 

• 

Guard Management

Site Management

Deployment Management

Attendance Management

Payroll Management

Billing Automation

Incident Management

All other modules are considered future enhancements.

12

